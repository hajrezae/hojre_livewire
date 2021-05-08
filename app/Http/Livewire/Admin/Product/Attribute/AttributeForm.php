<?php

namespace App\Http\Livewire\Admin\Product\Attribute;

use App\Models\Product\Attribute\Attribute;
use Illuminate\Validation\Rule;
use Livewire\Component;

class AttributeForm extends Component {

	public $action = 'create';
	public $attribute;

	public $listeners = ['attributeSelected'];

	public function attributeSelected($attributeId) {
		$this->action = 'edit';
		$this->attribute = Attribute::find($attributeId);
	}


	public function mount() {
		if ($this->action == 'create') {
			$this->attribute = new Attribute();
		}
	}


	public function addAttribute() {
		$this->validate();
		$this->attribute->save();

		$this->emit('attributeAdded');
		$this->dispatchBrowserEvent('success', ['message' => 'ویژگی با موفقیت افزوده شد']);
		$this->clearAttribute();

	}

	public function updateAttribute() {
		$this->validate();
		$this->attribute->save();
		$this->clearAttribute();
		$this->emit('attributeUpdated');
		$this->dispatchBrowserEvent('success', ['message' => 'ویژگی با موفقیت ویرایش شد']);
	}

	public function clearAttribute() {
		$this->attribute = new Attribute();
		$this->resetErrorBag();
		$this->action = 'create';
	}

	public function updated($key, $value) {
		$this->validateOnly($key);
		$this->attribute->$key = $value;

		session()->flash($key);
	}

	public function rules() {
		if ($this->action == 'create') {
			return [
				'attribute.name'        => ['required', 'unique:attributes,name'],
				'attribute.label'       => ['required'],
				'attribute.description' => ['nullable'],
				'attribute.style'       => ['nullable']
			];
		}
		return [
			'attribute.name'        => ['required', Rule::unique('attributes', 'name')->ignore($this->attribute)],
			'attribute.label'       => ['required'],
			'attribute.description' => ['nullable'],
			'attribute.style'       => ['nullable']
		];

	}

	public function render() {
		return view('livewire.admin.product.attribute.attribute-form');
	}
}
