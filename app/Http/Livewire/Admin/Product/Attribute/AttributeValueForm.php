<?php

namespace App\Http\Livewire\Admin\Product\Attribute;

use App\Models\Product\Attribute\Attribute;
use App\Models\Product\Attribute\AttributeValue;
use Livewire\Component;

class AttributeValueForm extends Component {
	public $action;
	public $attribute;
	public $attributeValue;

	public $listeners = ['attributeValueSelected'];

	public function mount(Attribute $attribute) {
			$this->attribute = $attribute;
			if($this->action == 'create') {
				$this->attributeValue = new AttributeValue();
			}
	}

	public function render() {
		return view('livewire.admin.product.attribute.attribute-value-form');
	}

	public function updated($key, $value) {
		$this->validateOnly($key);
		$this->attributeValue->$key = $value;

		session()->flash($key);
	}

	public function clearAttributeValue() {
		$this->attributeValue = new AttributeValue();
		$this->resetErrorBag();
	}

	public function attributeValueSelected($attributeValueId) {
		$this->attributeValue = AttributeValue::find($attributeValueId);
		$this->action = 'edit';
	}

	public function addAttributeValue() {
		$this->validate();
		$this->attributeValue->attribute_id = $this->attribute->id;
		$this->attributeValue->save();
		$this->emit('attributeValueAdded');
		$this->dispatchBrowserEvent('success', ['message' => 'مقدار ویژگی با موفقیت اضافه شد']);
		$this->clearAttributeValue();
	}

	public function updateAttributeValue() {
		$this->validate();
		$this->attributeValue->save();

		$this->emit('attributeValueUpdated');
		$this->dispatchBrowserEvent('success', ['message' => 'مقدار ویژگی با موفقیت به روز رسانی شد']);

	}

	public function rules() {
		if($this->action == 'create') {
			return [
				'attributeValue.name' => ['required'],
				'attributeValue.label' => ['required'],
				'attributeValue.description' => ['nullable'],
				'attributeValue.style' => ['nullable']
			];
		}
		return [
			'attributeValue.name' => ['required'],
			'attributeValue.label' => ['required'],
			'attributeValue.description' => ['nullable'],
			'attributeValue.style' => ['nullable']
		];

	}
}
