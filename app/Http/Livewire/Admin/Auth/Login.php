<?php

namespace App\Http\Livewire\Admin\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component {
	public $phone;
	public $password;

	public function render() {
		return view('livewire.admin.auth.login')
			->extends('admin.layout.auth')
			->section('form');
	}

	public function login() {
		$this->validate();
		if(Auth::attempt(['phone' => $this->phone, 'password' => $this->password])) {
			$user = User::where('phone', $this->phone)->first();
			session()->regenerate();
			Auth::login($user);

			return redirect()->route('admin.user.index');
		}

	}

	public function rules() {
		return ['phone' => 'required', 'password' => 'required'];
	}
}
