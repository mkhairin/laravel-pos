<?php

namespace App\Livewire\Transactions;

use Livewire\Component;
use Livewire\Attributes\Title;

class Index extends Component
{

    #[Title('Transaction List')]
    public function render()
    {
        return view('livewire.transactions.index');
    }
}
