<?php

namespace App\Http\Livewire\Admin\Product\Attribute;

use App\Models\Product\Attribute\AttributeValue;
use Livewire\Component;
use Livewire\WithPagination;

class AttributeValueList extends Component {
	use WithPagination;

	public $attribute;

	public $listeners = ['attributeValueAdded' => '$refresh', 'attributeValueUpdated' => '$refresh'];

	public function render() {

		$attributeValues = $this->attribute->attributeValues()->paginate(15);
		return view('livewire.admin.product.attribute.attribute-value-list')->with(['attributeValues' => $attributeValues]);
	}

	public function deleteAttributeValue($attributeValueId) {
		AttributeValue::find($attributeValueId)->delete();
		$this->emit('$refresh');
		$this->dispatchBrowserEvent('success', ['message' => 'مقدار ویگی با موفقیت حذف شد']);

	}

}
