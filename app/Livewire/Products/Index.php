<?php

namespace App\Livewire\Products;

use Livewire\Attributes\Title;
use Livewire\Component;

class Index extends Component
{

    #[Title('Product List')]
    public function render()
    {
        return view('livewire.products.index');
    }
}
