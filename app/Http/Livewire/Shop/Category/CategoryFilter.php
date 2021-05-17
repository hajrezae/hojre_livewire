<?php

namespace App\Http\Livewire\Shop\Category;

use Livewire\Component;

class CategoryFilter extends Component
{
    public $category;
    public function render()
    {
        return view('livewire.shop.category.category-filter');
    }
}
