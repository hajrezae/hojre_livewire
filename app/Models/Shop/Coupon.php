<?php

namespace App\Models\Shop;

use App\Services\Shop;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model {
	use HasFactory;

	protected $guarded = [];

	public function getTypeLabelAttribute() {
		if ($this->type == 'fixed_amount') return 'مبلغ ثابت سبد خرید';

		return 'درصد';
	}

	public function getAmountTextAttribute() {
		return number_format($this->amount) . " " .Shop::currency();
	}
}
