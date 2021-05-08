<?php

namespace App\Http\Livewire\Admin\Shop\Tax;

use App\Models\Shop\Tax;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Form extends Component {

	public $action;
	public $tax;

	public function mount() {
		if ($this->action == 'create') {
			$this->tax = new Tax();
		}

	}

	public function render() {
		return view('livewire.admin.shop.tax.form');
	}

	public function updated($key, $value) {
		$this->validateOnly($key);
		session()->flash($key);
	}

	public function rules() {
		if ($this->action == 'create') {
			return [
				'tax.name'    => ['required', 'unique:taxes,name'],
				'tax.label'   => ['required'],
				'tax.percent' => ['required', 'numeric', 'min:1', "max:100"]

			];
		}

		return [
			'tax.name'    => ['required', Rule::unique('taxes', 'name')->ignore($this->tax)],
			'tax.label'   => ['required'],
			'tax.percent' => ['required', 'numeric', 'min:1', "max:100"]
		];

	}

	public function clearTax() {
		$this->tax = new Tax();
		$this->action = 'edit';
	}

	public function create() {
		$this->validate();
		$this->tax->save();

		$this->dispatchBrowserEvent('success', ['message' => 'کلاس مالیاتی با موفقیت اضافه شد']);
		$this->emit('taxCreated');
		$this->clearTax();
	}
}
