<?php

namespace App\Http\Livewire\Admin\Shop\Tax;

use App\Models\Shop\Tax;
use Livewire\Component;

class TaxesList extends Component {
	public $taxes;
	public $listeners = ['taxCreated' , 'deleteTax'];

	public function mount() {
		$this->taxes = Tax::all();
	}

	public function taxCreated() {
		$this->taxes = Tax::all();
	}

	public function render() {
		return view('livewire.admin.shop.tax.taxes-list');
	}

	public function deleteTax($taxId) {
		Tax::find($taxId)->delete();
		$this->dispatchBrowserEvent('success', ['message' => 'کلاس مالیاتی با موفقیت حذف شد']);
		$this->emit('taxDeleted');
		$this->taxes = Tax::all();
	}
}
