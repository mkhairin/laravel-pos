<?php

namespace App\Livewire\Products;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Product as ProductModel;

class Update extends Component
{
    public ProductModel $product;
    public $name;
    public $description;
    public $price;
    public $stock;
    public $image_url;

    protected function rules()
    {
        return [
            'name' => 'required|min:3|max:50|string',
            'description' => 'required|min:3|string',
            'price' => 'required|integer',
            'stock' => 'required|integer',
            'image_url' => 'required'
        ];
    }

    public function mount($id)
    {
        $this->product = ProductModel::findOrFail($id);

        $this->name = $this->product->name;
        $this->description = $this->product->description;
        $this->price = $this->product->price;
        $this->stock = $this->product->stock;
        $this->image_url = $this->product->image_url;
    }

    public function update()
    {
        $this->validate();

        $this->product->update([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'stock' => $this->stock,
            'image_url' => $this->image_url
        ]);

        session()->flash('status', 'Product successfully updated...');
        $this->redirectRoute('products.index');
    }

    #[Title('Product Form Update')]
    public function render()
    {
        return view('livewire.products.update');
    }
}
