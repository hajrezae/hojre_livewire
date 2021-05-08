<?php

namespace App\Http\Livewire\Admin\User\Address;

use App\Models\User;
use Livewire\Component;

class AddressList extends Component {

	public $user;
	public $addresses;
	public $selectedAddressId;

	public $listeners = ['addressSelected', 'addressUpdated', 'addressUpdateCancel'];

	public function mount() {
		$this->addresses = $this->user->addresses;
	}

	public function addressSelected($addressId) {
		$this->selectedAddressId = $addressId;
	}

	public function addressUpdated() {
		$this->addresses = $this->user->addresses;
		$this->selectedAddressId = null;
	}

	public function deleteAddress($addressId) {
		User\Address::destroy($addressId);

		$this->addresses = $this->user->addresses = $this->user->addresses()->get();
		$this->dispatchBrowserEvent('success', ['message' => 'آدرس با موفقیت حذف شد']);
		$this->emit('$refresh');
	}


	public function addressUpdateCancel() {
		$this->selectedAddressId = null;
	}


	public function render() {
		return view('livewire.admin.user.address.address-list');
	}
}
