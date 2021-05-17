<?php

namespace App\View\Components\Shop\Product;

use App\Models\Product\Category;
use Illuminate\View\Component;

class CollectionGrid extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $categories;

    public function __construct($categories)
    {
        if(is_null($categories)) {
            $this->categories = Category::take(12)->get();
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.shop.product.collection-grid');
    }
}
