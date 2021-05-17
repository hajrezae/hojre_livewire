<?php

namespace App\Http\Livewire\Shop\Product;

use App\Models\Product\Product;
use Livewire\Component;

class SingleProduct extends Component
{
    public $product;
    public $prevProduct;
    public $nextProduct;
    public function mount(Product $product)
    {
        $this->product = $product;
        $this->prevProduct = Product::where('id', '<', $product->id)->first();
        $this->nextProduct = Product::where('id', '>', $product->id)->first();
    }


    public function render()
    {

        return view('livewire.shop.product.single-product')
            ->extends('shop.layouts.main')
            ->section('content');
    }
}
