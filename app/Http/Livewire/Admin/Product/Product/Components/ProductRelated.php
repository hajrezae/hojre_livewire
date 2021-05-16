<?php

namespace App\Http\Livewire\Admin\Product\Product\Components;

use App\Models\Product\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductRelated extends Component {
    use WithPagination;

    public $product;
    public $relatedIds = [];
    public $search = null;

    public function mount()
    {
        if ($this->product->related_products) {
            $this->relatedIds = unserialize($this->product->related_products);
        }
    }

    public function render()
    {
        $products = [];
        if (!is_null($this->search) && $this->search != '') {
            $products = Product::where('name', 'LIKE', "%$this->search%")
                               ->orWhere('slug', 'LIKE', "%$this->search%")
                               ->orWhere('SKU', 'LIKE', "%$this->search%")->get();
        }
        return view('livewire.admin.product.product.components.product-related')->with(['products' => $products]);
    }

    public function saveProductRelated()
    {
        if (empty($this->relatedIds)) {
            $this->product->related_products = null;
        } else {
            $this->product->related_products = serialize(array_values($this->relatedIds));
        }
        $this->product->save();
        $this->search = null;
    }
}
