<?php

namespace App\Http\Livewire\Admin\Shop\Supplier;

use App\Models\Shop\Supplier;
use Livewire\Component;
use Livewire\WithPagination;

class SupplierList extends Component {
	use WithPagination;

	protected $paginationTheme = 'bootstrap';

	public $listeners = ['supplierUpdated' => '$refresh', 'supplierCreated' => '$refresh', 'supplierDeleted' => '$refresh'];

	public function render() {
		$suppliers = Supplier::paginate(15);

		return view('livewire.admin.shop.supplier.supplier-list')
			->with(['suppliers' => $suppliers]);
	}

	public function deleteSupplier($supplierId) {
		Supplier::find($supplierId)->delete();

		$this->emit('supplierDeleted');
		$this->dispatchBrowserEvent('success', ['message' => 'تامین کننده با موفقیت حذف شد']);
	}
}
