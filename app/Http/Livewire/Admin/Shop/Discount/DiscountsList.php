<?php

namespace App\Http\Livewire\Admin\Shop\Discount;

use App\Models\Shop\Discount;
use Livewire\Component;
use Livewire\WithPagination;

class DiscountsList extends Component {
	use WithPagination;
	public $selectedDiscountId;

	public $listeners = ['discountCreated' => '$refresh', 'discountUpdated' => '$refresh', 'discountSelected', 'editCancelled', 'deleteDiscount'];

	public function editCancelled() {
		$this->selectedDiscountId = null;
	}

	public function discountSelected($discountId) {
		$this->selectedDiscountId = $discountId;
	}

	public function deleteDiscount($discountId) {
		Discount::find($discountId)->delete();
		$this->dispatchBrowserEvent('success', ['message' => 'تخفیف با موفقیت حذف شد']);
		$this->emit('$refresh');
	}

	public function render() {
		$discounts = Discount::paginate(20);
		return view('livewire.admin.shop.discount.discounts-list')->with(['discounts' => $discounts]);
	}
}
