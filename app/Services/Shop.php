<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class Shop {
	public static function get($option_name) {
		return DB::table('shop_options')
			->select('option_value')
			->where('option_name', $option_name)
			->first()->option_value;
	}

	public static function currency() {
		$currency = DB::table('shop_options')
			->select('option_value')
			->where('option_name', 'currency')
			->first()->option_value;

		if($currency == 'toman') return 'تومان';
	}
}