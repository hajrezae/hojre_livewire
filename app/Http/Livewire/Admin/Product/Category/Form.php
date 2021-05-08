<?php

namespace App\Http\Livewire\Admin\Product\Category;

use App\Models\Product\Category;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class Form extends Component {

	use WithFileUploads;

	public $action;
	public $category;
	public $selectedCategory;

	public $listeners = ['categorySelected'];

	public function categorySelected($categoryId) {
		$this->category = Category::find(intval($categoryId));
		$this->selectedCategory = $this->category;
		$this->action = 'edit';
	}

	public function clearCategory() {
		$this->category = new Category();
		$this->action = 'create';
	}

	public function addCategory() {
		if ($this->category->parent_id == null) {
			$this->category->parent_id = 0;
		}

		$this->validate();
		$this->category->save();
		$this->emit('categoryAdded');
		$this->dispatchBrowserEvent('success', ['message' => 'دسته بندی با موفقیت اضافه شد']);

		$this->clearCategory();
	}

	public function updateCategory() {
		$this->validate();
		$this->category->save();
		$this->emit('categoryUpdated');
		$this->dispatchBrowserEvent('success', ['message' => 'دسته بندی با موفقیت ویرایش شد']);
		$this->clearCategory();
	}

	public function mount() {
		if ($this->action == 'create') {
			$this->category = new Category();
		}
	}

	public function rules() {
		if ($this->action == 'create') {
			return [
				'category.slug'        => ['required', 'unique:categories,slug'],
				'category.label'       => ['required'],
				'category.parent_id'   => ['required'],
				'category.description' => ['nullable'],
				//				'category_image' => ['image']
			];
		}

		return [
			'category.slug'        => ['required', Rule::unique('categories', 'slug')->ignore($this->category)],
			'category.label'       => ['required'],
			'category.parent_id'   => ['required'],
			'category.description' => ['nullable'],
			//			'category_image' => ['image']
		];
	}

	public function updated($key, $value) {
		$this->validateOnly($key);
	}

	public function render() {
		return view('livewire.admin.product.category.form');
	}
}
