<?php

namespace App\Http\Livewire\Admin\Product\Attribute;

use App\Models\Product\Attribute\Attribute;
use App\Models\Product\Attribute\AttributeValue;
use Livewire\Component;
use Livewire\WithFileUploads;

class AttributeValueForm extends Component {
    use WithFileUploads;

	public $action;
	public $attribute;
	public $attributeValue;
	public $image;

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
		$this->image = null;
		$this->action = 'create';
	}

	public function attributeValueSelected($attributeValueId) {
		$this->attributeValue = AttributeValue::find($attributeValueId);
		$this->action = 'edit';
	}

	public function addAttributeValue() {
		$this->validate();
        $this->attributeValue->attribute_id = $this->attribute->id;
        if(!is_null($this->image)) {
            $this->attributeValue->image = $this->image->store('public/uploads');
        }
		$this->attributeValue->save();
		$this->emit('attributeValueAdded');
		$this->dispatchBrowserEvent('success', ['message' => 'مقدار ویژگی با موفقیت اضافه شد']);
		$this->clearAttributeValue();
	}

	public function updateAttributeValue() {
		$this->validate();
		if(!is_null($this->image)) {
            $this->attributeValue->image = $this->image->store('public/uploads');
        }
		$this->attributeValue->save();

		$this->emit('attributeValueUpdated');
		$this->dispatchBrowserEvent('success', ['message' => 'مقدار ویژگی با موفقیت به روز رسانی شد']);
        $this->clearAttributeValue();
	}

	public function rules() {
		if($this->action == 'create') {
			return [
				'attributeValue.name' => ['required'],
				'attributeValue.label' => ['required'],
				'attributeValue.description' => ['nullable'],
				'attributeValue.style' => ['nullable'],
                'attributeValue.color' => ['nullable'],
                'image' => ['nullable']
			];
		}
		return [
			'attributeValue.name' => ['required'],
			'attributeValue.label' => ['required'],
			'attributeValue.description' => ['nullable'],
			'attributeValue.style' => ['nullable'],
            'attributeValue.color' => ['nullable'],
            'image' => ['nullable']
        ];

	}
}
