<?php

namespace Database\Seeders;

use App\Models\Product\Tag;
use App\Models\Shop\Supplier;
use App\Models\ShopOption;
use App\Models\User;
use App\Models\User\Address;
use Database\Factories\ShopOptionFactory;
use Database\Seeders\Product\AttributeSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder {
	/**
	 * Seed the application's database.
	 * @return void
	 */
	public function run() {

		$this->call([
			\Database\Seeders\User::class,
			AttributeSeeder::class
		]);
		ShopOption::factory()->create(['option_name'  => 'currency','option_value' => 'toman']);
		Supplier::factory()->count(50)->create();
		Tag::factory()->count(30)->create();
	}
}
