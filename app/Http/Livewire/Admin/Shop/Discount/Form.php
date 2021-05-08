<?php

namespace App\Http\Livewire\Admin\Shop\Discount;

use App\Models\Shop\Discount;
use Livewire\Component;

class Form extends Component {
	public $action;
	public $discount;
	public $selectedModel;

	public $listeners = ['discountSelected', 'editCancelled'];

	public function discountSelected($discountId) {
		$this->discount = Discount::find($discountId);
		$this->action = 'edit';
		$this->emit('$refresh');
	}

	public function editCancelled() {
		$this->discount = new Discount();

	}

	public function mount() {
		if ($this->action == 'create') {
			$this->discount = new Discount();
			$this->discount->discountable_type = null;

			$this->action = 'create';
		}

		$this->discount->discountable_type = null;
	}

	public function updatedDiscountDiscountableType($className) {
		$this->selectedModel = $className;
		$this->discount->discountable_id = null;
	}

	public function updated($key, $value) {
		$this->validateOnly($key);
		session()->flash($key);
	}

	public function render() {
		return view('livewire.admin.shop.discount.form');
	}

	public function rules() {
		if($this->action == 'create') {
			return [
				'discount.name' => ['required'],
				'discount.label' => ['required'],
				'discount.description' => ['nullable'],
				'discount.discountable_type' => ['nullable'],
				'discount.discountable_id' => ['nullable'],
				'discount.percent' => ['required']
			];
		}
		return [
			'discount.name' => ['required'],
			'discount.label' => ['required'],
			'discount.description' => ['nullable'],
			'discount.discountable_type' => ['nullable'],
			'discount.discountable_id' => ['nullable'],
			'discount.percent' => ['required']
		];

	}

	public function clearDiscount() {
		$this->action = 'create';
		$this->discount = new Discount();
	}

	public function create() {
		$this->validate();
		$this->discount->save();
		$this->dispatchBrowserEvent('success', ['message' => 'تخفیف با موفقیت ایجاد شد']);
		$this->emit('discountCreated');
		$this->clearDiscount();
	}

	public function edit() {
		$this->validate();
		$this->discount->save();
		$this->dispatchBrowserEvent('success', ['message' => 'تخفیف با موفقیت اضافه شد']);
		$this->clearDiscount();
		$this->emit('discountUpdated');
	}
}
