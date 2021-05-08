<?php

namespace App\Http\Livewire\Admin\Shop\Coupon;

use App\Models\Shop\Coupon;
use Livewire\Component;
use Livewire\WithPagination;

class CouponsList extends Component {
	use WithPagination;
	public $selectedCouponId;

	public $listeners = ['couponCreated' => '$refresh', 'couponUpdated', 'couponSelected', 'editCancelled', 'deleteCoupon'];

	public function couponSelected($couponId) {
		$this->selectedCouponId = $couponId;
	}

	public function couponUpdated() {
		$this->selectedCouponId = null;
	}

	public function editCancelled() {
		$this->selectedCouponId = null;
	}

	public function deleteCoupon($couponId) {
		Coupon::find($couponId)->delete();
		$this->dispatchBrowserEvent('success', ['message' => 'کوپن با موفقیت حذف شد']);
	}

	public function render() {
		$coupons = Coupon::paginate(20);
		return view('livewire.admin.shop.coupon.coupons-list')->with(['coupons' => $coupons]);
	}
}
