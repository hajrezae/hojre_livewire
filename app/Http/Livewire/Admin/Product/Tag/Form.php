<?php

namespace App\Http\Livewire\Admin\Product\Tag;

use App\Models\Product\Tag;
use Illuminate\Validation\Rule;
use Livewire\Component;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Url;

class Form extends Component {

	public $action;
	public $tag;

	public $listeners = ['tagSelected'];

	public function tagSelected($tagId) {
		$this->tag = Tag::find($tagId);
		$this->action = 'edit';
	}

	public function mount() {
		if ($this->action == 'create') {
			$this->tag = new Tag();
		}

	}

	public function rules() {
		if ($this->action === 'create') {
			return [
				'tag.name'        => ['required', 'unique:tags,name'],
				'tag.label'       => ['required'],
				'tag.description' => ['nullable']
			];
		}

		return [
			'tag.name'        => ['required', Rule::unique('tags', 'name')->ignore($this->tag)],
			'tag.label'       => ['required'],
			'tag.description' => ['nullable']
		];
	}

	public function updated($key, $value) {
		$this->validateOnly($key);
		session()->flash($key);
	}

	public function create() {
		$this->validate();
		$this->tag->save();

		$this->dispatchBrowserEvent('success', ['message' => 'تگ با موفقیت ایجاد شد']);
		$this->emit('tagCreated');

	}

	public function update() {
		$this->validate();
		$this->tag->save();

		$this->dispatchBrowserEvent('success', ['message' => 'تگ با موفقیت به روز رسانی شد']);
		$this->emit('tagUpdated');
		$this->action = 'create';
		$this->tag = new Tag();
	}

	public function clearTag() {
		$this->tag = new Tag();
		$this->resetErrorBag();
	}

	public function render() {
		return view('livewire.admin.product.tag.form');
	}
}
