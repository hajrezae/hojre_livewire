<?php

namespace App\Http\Livewire\Admin\Product\Product\Components;

use Illuminate\Support\Arr;
use Livewire\Component;
use Livewire\WithPagination;

class ProductVariations extends Component {
	use WithPagination;

	protected $paginationTheme = 'bootstrap';

	public $product;


	public function render() {

		return view('livewire.admin.product.product.components.product-variations');
	}
}
