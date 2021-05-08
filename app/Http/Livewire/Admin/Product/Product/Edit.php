<?php

namespace App\Http\Livewire\Admin\Product\Product;

use App\Models\Product\Product;
use Livewire\Component;

class Edit extends Component {
	public $product;

	public function mount(Product $product) {
		$this->product = $product;
	}

	public function render() {
		return view('livewire.admin.product.product.edit')
			->extends('admin.layout.default')
			->section('content');
	}
}
