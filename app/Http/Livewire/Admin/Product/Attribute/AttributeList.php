<?php

namespace App\Http\Livewire\Admin\Product\Attribute;

use App\Models\Product\Attribute\Attribute;
use Livewire\Component;
use Livewire\WithPagination;

class AttributeList extends Component {

	use WithPagination;

	protected $listeners = ['attributeAdded' => '$refresh', 'attributeUpdated' => '$refresh', 'deleteAttribute', 'deleteAttributeFromList'];

	public function deleteAttribute($attributeId) {
		Attribute::find($attributeId)->delete();

		$this->show = false;
		$this->dispatchBrowserEvent('success', ['message' => 'ویژگی مورد نظر با موفقیت حذف شد']);
	}

	public function render() {
		$attributes = Attribute::paginate(20);
		return view('livewire.admin.product.attribute.attribute-list')->with(['attributes' => $attributes]);
	}
}
