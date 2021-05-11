<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersList extends Component {
	use WithPagination;
	protected $paginationTheme = 'bootstrap';

	public $userCount;
	public $search;

	public $listeners = ['deleteUser'];

	public function deleteUser($userId) {
		User::find($userId)->delete();
		$this->dispatchBrowserEvent('success', ['message'=> 'کاربر با موفقیت حذف شد']);
		$this->emit('$refresh');
	}
	public function mount() {
		$this->userCount = User::all()->count();
	}

	public function render() {
		$users = User::where('username', 'LIKE', "%$this->search%")
			->orWhere('phone', 'LIKE', "%$this->search%")
			->orWhere('email', 'LIKE', "%$this->search%")
			->orWhere('first_name', 'LIKE', "%$this->search%")
			->orWhere('last_name', 'LIKE', "%$this->search%")
			->orWhere('national_code', 'LIKE', "%$this->search%")
			->paginate(20)->withQueryString();
		$this->resetPage();

		return view('livewire.admin.user.users-list', ['users' => $users]);
	}


}
