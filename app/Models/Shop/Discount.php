<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model {
	use HasFactory;

	protected $guarded = [];

	public function appliedToLabel() {
		if($this->discountable_type == 'App\Models\User\Role') return 'نقش کاربری';

		return 'دسته بندی';
	}
}
