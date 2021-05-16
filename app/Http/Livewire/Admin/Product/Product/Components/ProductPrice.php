<?php

namespace App\Http\Livewire\Admin\Product\Product\Components;

use Illuminate\Validation\Rule;
use Livewire\Component;

class ProductPrice extends Component {
	public $active;
	public $product;
	
	
	//Actions
	public function saveProductPrice() {
		$this->validate();

		$this->product->save();

		$this->dispatchBrowserEvent('success', ['message' => 'قیمت های محصول با موفقیت ذخیره شد']);
		$this->active = true;
	}
	
	
	public function rules() {
		return [
			'product.price'          => ['nullable'],
			'product.discount_price' => ['nullable'],
			'product.buy_price'      => ['nullable'],
		];
	}

	public function render() {
		return view('livewire.admin.product.product.components.product-price');
	}
}
