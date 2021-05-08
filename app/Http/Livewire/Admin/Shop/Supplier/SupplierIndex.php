<?php

namespace App\Http\Livewire\Admin\Shop\Supplier;

use App\Models\Shop\Supplier;
use Livewire\Component;
use Livewire\WithPagination;

class SupplierIndex extends Component {

	public $hello;

	public function updatedHello($value) {
		dd($value);
	}
	public function render() {
		return view('livewire.admin.shop.supplier.supplier-index')
			->extends('admin.layout.default')
			->section('content');
	}
}
