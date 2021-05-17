<?php

namespace App\Http\Livewire\Shop\Category;

use App\Models\Product\Category;
use Livewire\Component;

class CategoryIndex extends Component
{
    public $category;
    public $page_title;

    public function mount(Category $category)
    {
        $this->page_title = 'دسته بندی - ' . $category->label;

    }
    public function render()
    {
        return view('livewire.shop.category.category-index')
            ->extends('shop.layouts.main')
            ->section('content');
    }
}
