<?php

namespace App\Http\Livewire\Admin\Product\Tag;

use App\Models\Product\Tag;
use Livewire\Component;

class TagsList extends Component {
	public $tags;

	public $listeners = ['tagCreated', 'tagUpdated'];

	public function tagCreated() {
		$this->tags = Tag::all();
	}

	public function tagUpdated() {
		$this->tags = Tag::all();
	}

	public function mount() {
		$this->tags = Tag::all();
	}

	public function render() {
		return view('livewire.admin.product.tag.tags-list');
	}

	public function deleteTag($tagId) {
		Tag::find($tagId)->delete();
		$this->dispatchBrowserEvent('success', ['message' => 'تگ با موفقیت به حذف شد']);
		$this->tags = Tag::all();
	}
}
