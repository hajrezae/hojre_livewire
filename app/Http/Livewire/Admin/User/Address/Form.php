<?php

namespace App\Http\Livewire\Admin\User\Address;

use App\Models\User;
use App\Models\User\Address;
use Livewire\Component;

class Form extends Component {
	public $user;
	public $address;
	public $action;
	
	public $listeners = ['addressSelected', 'addressUpdated' => '$refresh', 'addressUpdateCancel'];

	public function addressUpdateCancel() {
		$this->address = new Address();
		$this->action = 'create';
	}
	public function addAddress() {
		$this->validate();
		$this->address->user_id = $this->user->id;
		$this->address->save();
		$this->emit('addressUpdated');
		$this->action = 'create';
		$this->address = new Address();
	}
	public function updateAddress() {
		$this->validate();
		$this->address->save();
		$this->emit('addressUpdated');
		$this->action = 'create';
		$this->address = new Address();

		$this->dispatchBrowserEvent('success', ['message' => 'آدرس کاربر با موفقیت به روز رسانی شد']);
	}

	public function cancelEditing() {
		$this->resetErrorBag();
		$this->emit('addressUpdateCancel');
		$this->action = 'create';
		$this->address = new Address();
	}

	public function addressSelected($address) {
		$this->resetErrorBag();
		$this->address = $this->user->addresses()->find($address);
		$this->action = 'edit';
		$this->emit('$refresh');
	}

	public function mount(User $user) {
		$this->address = new Address();
	}

	public function updated($key, $value) {
		$this->validateOnly($key);
		$this->address->$key = $value;
	}

	public function rules() {
		return [
			'address.name' => ['required'],
			'address.country' => ['nullable'],
			'address.state' => ['nullable'],
			'address.city' => ['nullable'],
			'address.postcode' => ['nullable'],
			'address.phone' => ['nullable'],
			'address.address' => ['required'],
			'address.number' => ['nullable'],
			'address.door' => ['nullable'],
			'address.note' => ['nullable']
		];
	}

	public function render() {
		return view('livewire.admin.user.address.form');
	}
}
