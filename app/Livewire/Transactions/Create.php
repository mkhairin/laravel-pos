<?php

namespace App\Livewire\Transactions;

use Livewire\Component;
use Livewire\Attributes\Title;

class Create extends Component
{
    #[Title('Transaction')]
    public function render()
    {
        return view('livewire.transactions.create');
    }
}
