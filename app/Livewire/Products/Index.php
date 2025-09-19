<?php

namespace App\Livewire\Products;

use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Product as ProductModel;

class Index extends Component
{

    public function destroy($id)
    {
        $product = ProductModel::findOrFail($id);

        $product->delete();

        session()->flash('status', 'Product successfully deleted...');
        $this->redirectRoute('products.index');
    }


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
