<?php

namespace App\Livewire\Transactions;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Transaction;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;

    public $search = '';
    
    #[Title('Transaction List')]
    public function render()
    {
        return view('livewire.transactions.index');
    }
}
