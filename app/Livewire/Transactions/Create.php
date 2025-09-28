<?php

namespace App\Livewire\Transactions;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Support\Facades\DB;

class Create extends Component
{
    public $allProducts = [];
    public $cart = [];
    public $total = 0;

    // Method ini dijalankan saat komponen pertama kali dimuat
    public function mount()
    {
        $this->allProducts = Product::where('stock', '>', 0)->orderBy('name')->get();
        // Ambil data 'cart' dari session. Jika tidak ada, gunakan array kosong [].
        $this->cart = session('cart', []);
        $this->calculateTotal(); // Hitung total berdasarkan cart dari session
    }

    // Menambahkan produk ke keranjang
    public function addToCart($productId)
    {
        $product = Product::find($productId);

        // Cek stok sebelum menambahkan ke keranjang
        if ($product->stock <= 0) {
            session()->flash('error', 'Stock product is out of stock!');
            return;
        }

        if (isset($this->cart[$productId])) {
            // Jika produk sudah ada di cart, tambah kuantitasnya
            $this->cart[$productId]['quantity']++;
        } else {
            // Jika belum ada, tambahkan sebagai item baru
            $this->cart[$productId] = [
                'product_id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,
                'image_url' => $product->image_url
            ];
        }

        $this->calculateTotal();
        // Simpan versi terbaru dari $cart ke dalam session
        session(['cart' => $this->cart]);

        session()->flash('success', 'Product successfully added to cart!');
    }

    // fungsi button tambah quantity
    public function addButtonCartQuantity($productId)
    {
        $product = Product::find($productId);

        if ($product->stock <= 0) {
            session()->flash('error', 'Stock product is out of stock!');
            return;
        }

        if (isset($this->cart[$productId])) {
            // Jika produk sudah ada di cart, tambah kuantitasnya
            $this->cart[$productId]['quantity']++;
        }
    }

    // fungsi button delete quantity
    public function deletedButtonCartQuantity($productId)
    {
        $product = Product::find($productId);

        if ($product->stock <= 0) {
            session()->flash('error', 'Stock product is out of stock!');
            return;
        }

        if (isset($this->cart[$productId])) {
            // Jika produk sudah ada di cart, tambah kuantitasnya
            $this->cart[$productId]['quantity']--;
        }
    }

    // Menghapus item dari keranjang
    public function removeFromCart($productId)
    {
        unset($this->cart[$productId]);
        $this->calculateTotal();

        // Simpan versi terbaru dari $cart ke dalam session
        session(['cart' => $this->cart]);

        session()->flash('success', 'Item successfully deleted!');
    }

    // Menghitung total harga di keranjang
    public function calculateTotal()
    {
        $this->total = collect($this->cart)->sum(function ($item) {
            return $item['price'] * $item['quantity'];
        });
    }

    /**
     * INI ADALAH FUNGSI UTAMA UNTUK MEMPROSES TRANSAKSI
     */
    public function processTransaction()
    {
        // 1. Validasi: pastikan keranjang tidak kosong
        if (empty($this->cart)) {
            session()->flash('error', 'Empty shopping cart!');
            return;
        }

        try {
            // 2. Memulai "Safety Bubble" (Transaksi Database)
            DB::transaction(function () {
                // 3. Buat "Kepala" Struk (Simpan ke tabel transactions)
                $transaction = Transaction::create([
                    'user_id' => 1,
                    'invoice_number' => 'INV-' . date('Ymd-His'),
                    'total_amount' => $this->total,
                    'status' => 'paid'
                ]);

                // 4. Loop setiap item di keranjang untuk disimpan dan diupdate
                foreach ($this->cart as $item) {
                    $product = Product::find($item['id']);

                    // Validasi stok di dalam transaksi untuk mencegah race condition
                    if ($product->stock < $item['quantity']) {
                        throw new \Exception('Stok untuk produk ' . $product->name . ' tidak mencukupi.');
                    }
                    // 4a. Catat Rincian Barang (Simpan ke transaction_details)
                    TransactionDetail::create([
                        'transaction_id' => $transaction->id,
                        'product_id' => $item['product_id'],
                        'quantity' => $item['quantity'],
                        'price' => $item['price'],
                    ]);

                    // 4b. Kurangi Stok Produk
                    $product->decrement('stock', $item['quantity']);
                }
            });

            // 5. Beri Respon Sukses dan Reset Keranjang
            session()->flash('success', 'Transaction successfully processed!');
            $this->reset(['cart', 'total']);
            // 4. KOSONGKAN JUGA SESSION SETELAH TRANSAKSI BERHASIL
            session()->forget('cart');
            // $this->mount(); // Muat ulang data produk
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
        }
    }

    #[Title('Transaction')]
    public function render()
    {
        return view('livewire.transactions.create', ['cart' => $this->cart]);
    }
}
