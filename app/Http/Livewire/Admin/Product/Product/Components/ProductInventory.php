<?php

namespace App\Http\Livewire\Admin\Product\Product\Components;

use Livewire\Component;

class ProductInventory extends Component {
	public $product;

	//Actions
    public function saveProductInventory()
    {
        sleep(1);
        $this->validate();
        $this->product->save();
        $this->dispatchBrowserEvent('success', ['message' => 'مشخصات انبار محصول با موفقیت ذخیره شد']);
    }

	public function render() {
		return view('livewire.admin.product.product.components.product-inventory');
	}

	public function rules() {
		return [
			'product.manage_stock'       => ['nullable'],
			'product.stock_input'        => ['nullable'],
			'product.stock'              => ['nullable'],
			'product.stock_aisle_number' => ['nullable'],
			'product.stock_unit'         => ['nullable'],
			'product.stock_shelf'        => ['nullable'],
			'product.stock_shelf_row'    => ['nullable'],
		];
	}
}
