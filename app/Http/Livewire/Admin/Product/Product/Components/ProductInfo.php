<?php

namespace App\Http\Livewire\Admin\Product\Product\Components;

use Livewire\Component;

class ProductInfo extends Component {
	public $product;


	//Actions
	public function saveProductInfo() {
	    sleep(1);
		$this->validate();
		$this->product->tax_id = $this->product->tax_id == 'null' ? null : $this->product->tax_id;
		$this->product->save();
		$this->dispatchBrowserEvent('success', ['message' => 'اطلاعات کلی محصول با موفقیت ذخیره شد.']);
	}

//	public function saveTax($taxId) {
//		$this->product->tax_id = $taxId;
//		$this->product->save();
//	}

	public function render() {
		return view('livewire.admin.product.product.components.product-info');
	}

	public function rules() {
		return [
			'product.tax_id'           => ['nullable'],
			'product.sell_individual'  => ['nullable'],
			'product.sell_with_credit' => ['nullable'],
			'product.preorder'         => ['nullable']
		];
	}
}
