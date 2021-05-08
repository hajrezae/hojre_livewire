<?php

namespace App\Http\Livewire\Admin\User\Role;

use App\Models\User\Role;
use Doctrine\Inflector\Rules\English\Rules;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Form extends Component {
	public $action;
	public $role;
	
	public $listeners = ['roleSelected', 'editCancelled'];

	

	public function roleSelected(Role $role) {
		$this->role = $role;
		$this->action = 'edit';
	}

	public function updated($key, $value) {
		$this->validateOnly($key);

		session()->flash($key);
	}

	public function mount() {
		if ($this->action == 'create') {
			$this->role = new Role();
		}
	}

	public function render() {
		return view('livewire.admin.user.role.form');
	}

	public function rules() {
		if ($this->action == 'create') {
			return [
				'role.name'        => ['required', 'unique:roles,name'],
				'role.label'       => ['required'],
				'role.description' => ['nullable']
			];
		}

		return [
			'role.name'        => ['required', Rule::unique('roles', 'name')->ignore($this->role)],
			'role.label'       => ['required'],
			'role.description' => ['nullable']
		];
	}

	public function getValidationAttributes() {
		return [
			'role.name' => 'نام نقش کاربری الزامی میباشد',
			'role.label' => 'عنوان نقش کاربری الزامی میباشد',
			];
	}

	public function clearRole() {
		$this->role = new Role();
		$this->action = 'create';
	}

	public function editCancelled() {
		$this->clearRole();
	}

	public function create() {
		$this->validate();

		$this->role->save();

		$this->dispatchBrowserEvent('success', ['message' => 'نقش کاربری با موفقیت ساخته شد']);
		$this->emit('roleCreated');
		$this->clearRole();
	}

	public function edit() {
		$this->validate();

		$this->role->save();

		$this->dispatchBrowserEvent('success', ['message' => 'نقش کاربری با موفقیت ویرایش شد']);
		$this->emit('roleUpdated');
		$this->clearRole();
	}
}
