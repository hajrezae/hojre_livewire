<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class Form extends Component {
	use WithFileUploads;

	public $user;
	public $action;
	public $avatar;
	public $password;


	public function mount(User $user) {
		if ($this->action == 'create') {
			$this->user = new User();
		} else {
			$this->user = $user;
			$this->avatar = $this->user->avatar_url;
		}
	}

	public function create() {
		$this->validate();
		if (!is_null($this->avatar)) {
			$this->user->avatar_url = $this->avatar->storeAs('public/avatars', $this->avatar->getClientOriginalName());
		}

		unset($this->user->avatar);
		if ($this->user->gender == 'null') {
			$this->user->gender = null;
		}

		$this->user->save();
		session()->flash('action_success', 'کاربر با موفقیت ایجاد شد');
		return redirect()->route('admin.user.edit', $this->user);
	}

	public function edit() {
		$this->validate();
		unset($this->user->avatar);
		if (!is_null($this->password)) {
			$this->user->password = $this->password;
		}

		if ($this->user->gender == 'null') {
			$this->user->gender = null;
		}


		$this->user->save();
		session()->flash('action_success', 'کاربر با موفقیت به روز رسانی شد');
		return redirect()->route('admin.user.index');
	}

	public function updated($key, $value) {
		if ($key == 'avatar') return;
		$this->validateOnly($key);
		$this->user->$key = $value;
		session()->flash($key, 'updated');
	}

	public function updatedAvatar() {
		$this->user->avatar_url = $this->avatar->storeAs('public/avatars', $this->avatar->getClientOriginalName());
		unset($this->user->avatar);
		if ($this->action == 'create') return;
		$this->user->save();
	}



	public function rules() {
		if ($this->action == 'create') {
			return [
				'user.username'      => ['required', 'min:3', Rule::unique('users', 'username')],
				'user.phone'         => ['required', 'max:11', Rule::unique('users', 'phone')],
				'user.email'         => ['nullable', 'email', Rule::unique('users', 'email')],
				'user.national_code' => ['nullable', 'numeric', Rule::unique('users', 'national_code')->ignore($this->user)],
				'user.password'      => ['nullable', 'min:6'],
				'user.first_name'    => ['nullable', 'alpha'],
				'user.last_name'     => ['nullable', 'alpha'],
				'user.brand'         => 'nullable',
				'user.instagram'     => 'nullable',
				'user.twitter'       => 'nullable',
				'user.gender'        => ['nullable', Rule::in(['man', 'woman', 'other'])],
				'user.sheba'         => ['nullable'],
				'user.card_number'   => ['nullable'],
				'user.about'         => ['nullable'],
				'user.wallet'        => ['nullable', 'numeric'],
				'user.point'         => ['nullable', 'numeric'],
				'user.avatar'        => ['nullable']
			];

		}

		return [
			'user.username'      => ['required', 'min:3', Rule::unique('users', 'username')->ignore($this->user)],
			'user.phone'         => ['required', 'max:11', Rule::unique('users', 'phone')->ignore($this->user)],
			'user.email'         => ['nullable', 'email', Rule::unique('users', 'email')->ignore($this->user)],
			'user.national_code' => ['nullable', 'numeric', Rule::unique('users', 'national_code')->ignore($this->user)],
			'password'           => ['nullable', 'min:6'],
			'user.first_name'    => ['nullable', 'alpha'],
			'user.last_name'     => ['nullable', 'alpha'],
			'user.brand'         => 'nullable',
			'user.instagram'     => 'nullable',
			'user.twitter'       => 'nullable',
			'user.gender'        => ['nullable'],
			'user.sheba'         => ['nullable'],
			'user.card_number'   => ['nullable'],
			'user.about'         => ['nullable'],
			'user.wallet'        => ['nullable', 'numeric'],
			'user.point'         => ['nullable', 'numeric'],
			'user.avatar'        => ['nullable']
		];

	}

	public function render() {
		return view('livewire.admin.user.form');
	}
}
