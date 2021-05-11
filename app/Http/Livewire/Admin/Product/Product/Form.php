<?php

namespace App\Http\Livewire\Admin\Product\Product;

use App\Models\Product\Product;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Unique;
use Livewire\Component;

class Form extends Component {
	public $product;
	public $tab;

//	public $listeners = ['productUpdated'];

	//Event Listeners
//	public function productUpdated() {
//		$this->product = Product::find($this->product->id);
//	}

	public function render() {
		return view('livewire.admin.product.product.form');
	}

	public function rules() {
		return [
			'product.name'               => ['required', Rule::unique('products', 'name')->ignore($this->product)],
			'product.slug'               => ['nullable', Rule::unique('products', 'slug')->ignore($this->product)],
			'product.type'               => ['required', Rule::in(['simple', 'variable'])],
			'product.SKU'                => ['nullable', Rule::unique('products', 'SKU')->ignore($this->product)],
			'product.status'             => ['nullable'],
			'product.product_url'        => ['nullable', Rule::unique('products', 'product_url')->ignore($this->product)],
			'product.image_url'          => ['nullable'],
			'product.short_description'  => ['nullable'],
			'product.description'        => ['nullable'],
			'product.multi_supplier'     => ['nullable'],
			'product.manage_stock'       => ['nullable'],
			'product.stock_input'        => ['nullable'],
			'product.stock'              => ['nullable'],
			'product.stock_aisle_number' => ['nullable'],
			'product.stock_unit'         => ['nullable'],
			'product.stock_shelf'        => ['nullable'],
			'product.stock_shelf_row'    => ['nullable'],
			'product.stop_selling'       => ['nullable'],
			'product.price'              => ['nullable'],
			'product.discount_price'     => ['nullable'],
			'product.buy_price'          => ['nullable'],
			'product.label'              => ['nullable'],
			'product.tax_id'             => ['nullable'],
			'product.sell_individual'    => ['nullable'],
			'product.preorder'           => ['nullable'],
			'product.sell_with_credit'   => ['nullable'],
			'product.point'              => ['nullable'],
			'product.weight'             => ['nullable'],
			'product.dimensions'         => ['nullable'],
			'product.related_products'   => ['nullable'],
			'product.note'               => ['nullable'],
			'product.meta'               => ['nullable'],
		];
	}
}
