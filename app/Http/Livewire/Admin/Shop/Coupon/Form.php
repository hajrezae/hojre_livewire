<?php

namespace App\Http\Livewire\Admin\Shop\Coupon;

use App\Models\Shop\Coupon;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Form extends Component {
	public $action;
	public $coupon;

	public $listeners = ['couponSelected', 'editCancelled'];

	public function couponSelected($couponId) {
		$this->coupon = Coupon::find($couponId);
		$this->action = 'edit';
	}

	public function mount() {
		if ($this->action == 'create') {
			$this->coupon = new Coupon();
		}
	}

	public function render() {
		return view('livewire.admin.shop.coupon.form');
	}

	public function updatedCouponType() {
		$this->coupon->amount = null;
	}

	public function updated($key, $value) {
		$this->validateOnly($key);

		session()->flash($key);
	}

	public function rules() {
		if($this->action == 'create') {
			return [
				'coupon.name' => ['required', 'unique:coupons,name'],
				'coupon.label' => ['required'],
				'coupon.type' => ['required', Rule::in(['fixed_amount', 'percent'])],
				'coupon.amount' => ['required', 'numeric'],
				'coupon.apply_multiple' => ['nullable'],
				'coupon.order' => ['nullable'],
				'coupon.limit' => ['nullable'],
				'coupon.min_price' => ['nullable'],
				'coupon.max_price' => ['nullable']
			];
		}

		return [
			'coupon.name' => ['required', Rule::unique('coupons', 'name')->ignore($this->coupon)],
			'coupon.label' => ['required'],
			'coupon.type' => ['required', Rule::in(['fixed_amount', 'percent'])],
			'coupon.apply_multiple' => ['nullable'],
			'coupon.order' => ['nullable'],
			'coupon.limit' => ['nullable'],
			'coupon.min_price' => ['nullable'],
			'coupon.max_price' => ['nullable']
		];
	}

	public function clearCoupon() {
		$this->coupon = new Coupon();
		$this->action = 'create';
	}

	public function editCancelled() {
		$this->clearCoupon();
	}

	public function create() {
		$this->validate();
		$this->coupon->save();

		$this->dispatchBrowserEvent('success', ['message' => 'کوپن با موفقیت اضافه شد']);
		$this->emit('couponCreated');
		$this->clearCoupon();
	}

	public function edit() {
		$this->validate();
		$this->coupon->save();
		$this->dispatchBrowserEvent('success', ['message' => 'کوپن با موفقیت ویرایش شد']);

		$this->emit('couponUpdated');
		$this->clearCoupon();
	}
}
