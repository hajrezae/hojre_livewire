<?php

namespace App\Http\Livewire\Admin\Product\Product\Components;

use Livewire\Component;
use Livewire\WithFileUploads;

class ProductImage extends Component {
	use WithFileUploads;
	public $product;
	public $product_image;

	public function updatedProductImage($key, $value) {
		$url = $this->product_image->store('public/products');
		$this->product->image_url = $url;
		$this->product->save();
	}

	public function render() {
		return view('livewire.admin.product.product.components.product-image');
	}
}
