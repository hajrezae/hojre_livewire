<?php

namespace App\Models;

use App\Models\User\Address;
use App\Models\User\Permission;
use App\Models\User\Role;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable {
	use HasFactory, Notifiable;

	/**
	 * The attributes that are mass assignable.
	 * @var array
	 */
	protected $guarded = [];
	/**
	 * The attributes that should be hidden for arrays.
	 * @var array
	 */
	protected $hidden = [
		'remember_token',
	];

	/**
	 * The attributes that should be cast to native types.
	 * @var array
	 */
	protected $casts = [
		'email_verified_at' => 'datetime',
	];

	public function roles() {
		return $this->belongsToMany(Role::class, 'user_role');
	}

	public function permissions() {
		return $this->belongsToMany(Permission::class, 'user_permission');
	}

	public function addresses() {
		return $this->hasMany(Address::class);
	}

	public function setPasswordAttribute($value) {
		$this->attributes['password'] = Hash::make($value);
	}

	/**
	 * Check if user has the given permission and return True OR False
	 * @return $this
	 */
	public function hasPermission($permission) {
		return $this->permissions;
	}
}
