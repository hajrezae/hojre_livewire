<?php

namespace App\Http\Livewire\Admin\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component {
    public $phone;
    public $password;

    public function render()
    {
        return view('livewire.admin.auth.login')
            ->extends('admin.layout.auth')
            ->section('form');
    }

    public function login()
    {
        $this->validate();
        if (Auth::attempt(['phone' => $this->phone, 'password' => $this->password]) || Auth::attempt(['username' =>
                                                                                                          $this->phone,
                                                                                                      'password' => $this->password])) {
            $user = User::where('phone', $this->phone)
                        ->orWhere('username', $this->phone)
                        ->first();


            if (!$user->roles->pluck('name')->contains('admin')) return $this->dispatchBrowserEvent('login_failed',
                ['message' =>
                     'اجازه ورود به این قسمت را ندارید']);

            session()->regenerate();
            Auth::login($user);

            return redirect()->route('admin.user.index');
        }

        $this->dispatchBrowserEvent('login_failed', ['message' => 'ورود با موفقیت انجام نشد']);

    }

    public function rules()
    {
        return ['phone' => 'required', 'password' => 'required'];
    }
}
