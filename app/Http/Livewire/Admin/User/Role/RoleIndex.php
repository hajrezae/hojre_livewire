<?php

namespace App\Http\Livewire\Admin\User\Role;

use Livewire\Component;

class RoleIndex extends Component {
	public function render() {
		return view('livewire.admin.user.role.role-index')
			->extends('admin.layout.default')
			->section('content');
	}
}
