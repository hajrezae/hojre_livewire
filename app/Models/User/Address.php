<?php

namespace App\Models\User;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model {
	use HasFactory;

	protected $guarded = [];

	public function user() {
			return $this->belongsTo(User::class);
	}
}
