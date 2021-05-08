<?php

namespace App\Http\Livewire\Admin\User\Role;

use App\Models\User\Role;
use Livewire\Component;
use Livewire\WithPagination;

class RolesList extends Component {
	use WithPagination;
	public $selectedRole;
	public $listeners = ['roleSelected', 'editCancelled', 'deleteRole', 'roleCreated' => '$refresh', 'roleUpdated' => '$refresh'];



	public function deleteRole($roleId) {
		Role::find($roleId)->delete();

		$this->dispatchBrowserEvent('success', ['message' => 'نقش کاربری با موفقیت حذف شد']);

	}

	public function roleSelected(Role $role) {
		$this->selectedRole = $role->id;
	}

	public function editCancelled() {
		$this->selectedRole = null;
	}

	public function render() {
		$roles = Role::paginate(30);
		return view('livewire.admin.user.role.roles-list')->with(['roles' => $roles]);
	}
}
