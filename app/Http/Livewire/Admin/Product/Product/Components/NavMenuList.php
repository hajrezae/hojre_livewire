<?php

namespace App\Http\Livewire\Admin\Product\Product\Components;

use App\Models\Product\Product;
use Livewire\Component;

class NavMenuList extends Component {
	public $product;

	public $listeners = ['productUpdated'];

	//Event Listeners
	public function productUpdated() {
		$this->product = Product::find($this->product->id);
	}

	public function render() {
		return view('livewire.admin.product.product.components.nav-menu-list');
	}
}
