<?php

namespace App\Livewire\Products;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Product as ProductModel;

class Create extends Component
{
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

    public function save()
    {
        $this->validate();

        try {
            ProductModel::create([
                'name' => $this->name,
                'description' => $this->description,
                'price' => $this->price,
                'stock' => $this->stock,
                'image_url' => $this->image_url,
            ]);

            session()->flash('success', 'Product successfully added!');
        } catch (\Exception $error) {
            // (Opsional) Anda bisa mencatat errornya untuk debugging
            session()->flash('error', $error->getMessage());
            // \Log::error('Error creating product: ' . $error->getMessage());
            session()->flash('error', 'Product failed to add!');
        }

        $this->redirectRoute('products.index');
    }


    #[Title('Product Form')]
    public function render()
    {
        return view('livewire.products.create');
    }
}
