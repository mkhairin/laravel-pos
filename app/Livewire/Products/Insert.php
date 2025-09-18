<?php

namespace App\Livewire\Products;

use Livewire\Attributes\Title;
use Livewire\Component;

class Insert extends Component
{
    #[Title('Product Form')]
    public function render()
    {
        return view('livewire.products.insert');
    }
}
