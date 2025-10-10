<?php

namespace App\Livewire\Transactions;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Transaction as TransactionModel;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;

    public $search = '';
    public string $sortDirection = 'asc';

    // Jika Anda pakai <select wire:model.live="sortDirection">
    public function updatedSortDirection()
    {
        // Tunda eksekusi selama 1 detik untuk testing
        sleep(2);
        $this->resetPage();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function sortBy(string $direction)
    {
        // Validasi agar hanya 'asc' atau 'desc' yang diterima
        $this->sortDirection = in_array($direction, ['asc', 'desc']) ? $direction : 'asc';
        $this->resetPage();
    }

    public function getData()
    {
        // return TransactionModel::with('user')->when($this->search, function ($query) {
        //     // Ganti 'invoice_number' dengan kolom yang ingin Anda cari
        //     $query->where('invoice_number', 'like', '%' . $this->search . '%');
        // })->orderBy('created', $this->sortDirection)->paginate(10);

        return TransactionModel::with('user')->orderBy('created', $this->sortDirection)->paginate(10);
    }

    #[Title('Transaction List')]
    public function render()
    {
        return view('livewire.transactions.index', [
            'transactions' => $this->getData()
        ]);
    }
}
