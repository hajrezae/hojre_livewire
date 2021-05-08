<?php

namespace App\Http\Livewire\Admin\Product\Product;

use App\Models\Product\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component {
	use WithPagination;


	public function render() {

		$products = Product::paginate(20);

		return view('livewire.admin.product.product.index')
			->extends('admin.layout.default')
			->section('content')
			->with(['products' => $products]);
	}
}
