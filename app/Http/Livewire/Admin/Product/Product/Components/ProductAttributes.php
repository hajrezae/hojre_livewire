<?php

namespace App\Http\Livewire\Admin\Product\Product\Components;

use App\Models\Product\Attribute\Attribute;
use App\Models\Product\Product;
use Livewire\Component;

class ProductAttributes extends Component {
	public $product;

	public function render() {
		return view('livewire.admin.product.product.components.product-attributes')->with(['attributes' => $this->attributes]);
	}
}
