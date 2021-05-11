<?php

namespace App\Http\Livewire\Admin\User\Address;

use App\Models\User;
use App\Models\User\Address;
use Livewire\Component;

class AddressList extends Component {

	public $user;
	public $addresses;
	public $selectedAddressId;

	public $listeners = ['addressSelected', 'addressUpdated', 'addressUpdateCancel', 'deleteAddress'];

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
		try {
			Address::destroy($addressId);

			$this->addresses = $this->user->addresses()->get();
			$this->dispatchBrowserEvent('action_success', ['message' => 'آدرس با موفقیت حذف شد']);
			$this->emit('$refresh');
		}catch(\Exception $e) {
			$this->dispatchBrowserEvent('action_failed', ['message' => 'مشکلی در ارتباط با دیتابیس رخ داده لطقا دقایقی دیگر امتخان کنید!']);
		}
	}


	public function addressUpdateCancel() {
		$this->selectedAddressId = null;
	}


	public function render() {
		return view('livewire.admin.user.address.address-list');
	}
}
