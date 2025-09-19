<?php

namespace App\Livewire\Products;

use Livewire\Component;
use App\Models\Product as ProductModel;

class ProductDetailModal extends Component
{
    public ?ProductModel $product;
    public $showModal = false;

    // Listener untuk "mendengar" event dari komponen lain
    protected $listeners = ['showProductDetailModal'];

    public function showProductDetailModal($productId)
    {
        // Cari item di database berdasarkan ID yang dikirim
        $this->product = ProductModel::findOrFail($productId);

        // Ubah status properti untuk menampilkan modal
        $this->showModal = true;
    }

    public function closeModal()
    {
        // Reset properti untuk menyembunyikan modal
        $this->showModal = false;
        $this->product = null;
    }

    public function render()
    {
        return view('livewire.products.product-detail-modal');
    }
}
