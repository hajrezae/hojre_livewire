<?php

namespace App\Http\Livewire\Admin\Shop\Supplier;

use App\Models\Shop\Supplier;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Form extends Component {

	public $action;
	public $supplier;
	public $password;

	public $listeners = ['supplierSelected'];

	public function supplierSelected($supplierId) {
		$this->supplier = Supplier::find($supplierId);
		$this->password = $this->supplier->password;
		$this->supplier->password = null;
		$this->action = 'edit';
	}

	public function mount() {
		if ($this->action == 'create') {
			$this->supplier = new Supplier();
		}
	}

	public function render() {
		return view('livewire.admin.shop.supplier.form');
	}

	public function updated($key, $value) {
		$this->validateOnly($key);
		session()->flash($key, 'valid');
	}

	public function rules() {
		if($this->action == 'create') {
			return [
				'supplier.username' => ['required', 'unique:suppliers,username'],
				'supplier.shop_name' => ['required'],
				'supplier.password' => ['nullable', 'min:6'],
				'supplier.code' => ['nullable'],
				'supplier.manager_first_name' => ['required'],
				'supplier.manager_last_name' => ['required'],

				//TODO: validate correct number format
				'supplier.contact_phone' => ['required', 'numeric'],
				'supplier.shop_phone' => ['required', 'numeric'],

				'supplier.logo_url' => ['nullable'],
				'supplier.contact_email' => ['required', 'unique:suppliers,contact_email'],
				'supplier.postcode' => ['required'],
				'supplier.active' => ['nullable', Rule::in([0, 1])],
				'supplier.manager_national_code' => ['required', 'numeric', 'unique:suppliers,manager_national_code'],
				'supplier.sheba_number' => ['required'],
				'supplier.documents' => ['nullable'],
				'supplier.cash_out_method' => ['nullable'],
				'supplier.about' => ['nullable'],
				'supplier.min_delivery_time' => ['nullable'],
				'supplier.max_delivery_time' => ['nullable'],
				'supplier.is_manufacturer' => ['nullable']
			];
		}

		return [
			'supplier.username' => ['required', Rule::unique('suppliers', 'username')->ignore($this->supplier)],
			'supplier.shop_name' => ['required'],
			'supplier.password' => ['nullable', 'min:6'],
			'supplier.code' => ['nullable'],
			'supplier.manager_first_name' => ['required'],
			'supplier.manager_last_name' => ['required'],

			//TODO: validate correct number format
			'supplier.contact_phone' => ['required', 'numeric'],
			'supplier.shop_phone' => ['required', 'numeric'],

			'supplier.logo_url' => ['nullable'],
			'supplier.contact_email' => ['required', Rule::unique('suppliers', 'contact_email')->ignore($this->supplier)],
			'supplier.postcode' => ['required'],
			'supplier.active' => ['nullable', Rule::in([0, 1])],
			'supplier.manager_national_code' => ['required', 'numeric', Rule::unique('suppliers', 'manager_national_code')->ignore($this->supplier)],
			'supplier.sheba_number' => ['required'],
			'supplier.documents' => ['nullable'],
			'supplier.cash_out_method' => ['nullable'],
			'supplier.about' => ['nullable'],
			'supplier.min_delivery_time' => ['nullable'],
			'supplier.max_delivery_time' => ['nullable'],
			'supplier.is_manufacturer' => ['nullable']
		];
	}

	public function clearSupplier() {
		$this->supplier = new Supplier();
		$this->resetErrorBag();
	}

	public function update() {
		$this->validate();
		if(is_null($this->supplier->password)) {
			$this->supplier->password = $this->password;
		}
		$this->supplier->save();

		$this->dispatchBrowserEvent('success', ['message' => 'تامین کننده با موفقیت به روز رسانی شد']);
		$this->emit('supplierUpdated');
		$this->clearSupplier();
	}


}
