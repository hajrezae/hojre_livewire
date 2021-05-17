<?php

namespace App\Http\Livewire\Shop\Category;

use App\Models\Product\Category;
use Livewire\Component;

class ProductsList extends Component
{
    public $category;
    public $categoryProducts;
    public function mount(Category $category)
    {
        $this->categoryProducts = $category->products;
    }
    public function render()
    {
        return view('livewire.shop.category.products-list');
    }
}
