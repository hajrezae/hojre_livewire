<?php

namespace App\Http\Livewire\Admin\Product\Category;

use App\Models\Product\Category;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryList extends Component {
	use WithPagination;

	public $selectedCategory;

	public $listeners = ['categorySelected', 'categoryAdded', 'categoryUpdated' , 'deleteCategory'];

	public function mount() {
	}

	public function categorySelected($categoryId) {
		$this->selectedCategory = Category::find($categoryId)->first();
	}

	public function deleteCategory($categoryId) {
		$category = Category::find($categoryId);
		if($category->childs()->isNotEmpty()) {
			Category::where('parent_id', $categoryId)->update(['parent_id' => 0]);
		}

		$category->delete();

		$this->dispatchBrowserEvent('success', ['message' => 'دسته بندی مورد نظر با موفقیت حذف شد']);
	}

	public function categoryAdded() {
		$this->emit('$refresh');
	}

	public function categoryUpdated() {
		$this->emit('$refresh');
	}

	public function render() {
		return view('livewire.admin.product.category.category-list')->with(['categories' => Category::where('parent_id', 0)->paginate(20)]);
	}
}
