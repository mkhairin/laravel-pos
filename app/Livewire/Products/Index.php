<?php

namespace App\Livewire\Products;

use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Product as ProductModel;

class Index extends Component
{

    #[Title('Product List')]
    public function render()
    {
        return view(
            'livewire.products.index',
            [
                'products' => ProductModel::all()
            ]
        );
    }
}
