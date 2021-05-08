<?php

namespace Database\Factories\Shop;

use App\Models\Shop\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Ybazli\Faker\Facades\Faker;


class SupplierFactory extends Factory {
	/**
	 * The name of the factory's corresponding model.
	 * @var string
	 */
	protected $model   = Supplier::class;
	protected $persian = Faker::class;

	/**
	 * Define the model's default state.
	 * @return array
	 */


	public function definition() {


		return [
			'shop_name'          => Faker::firstName(),
			'username'           => $this->faker->userName . rand(1, 2000),
			'password'           => Hash::make('123456789'), //123456789
			'code'               => 'HJR-' . Str::random(8),
			'manager_first_name' => Faker::firstName(),
			'manager_last_name'  => Faker::lastName(),
			'logo_url'           => '/media/project-logos/' . rand(1, 7) . '.png',
			'contact_phone'      => Faker::mobile() . rand(1, 20),
			'shop_phone'         => Faker::tellphone() . rand(1, 20),
			'contact_email'      => Str::random('4') . $this->faker->email,
			'postcode'           => $this->faker->postcode,
			'manager_national_code'      => Faker::melliCode(),
			'sheba_number'       => $this->faker->creditCardNumber,
			'about'              => Faker::paragraph(),
			'max_delivery_time'  => rand(3, 5),
			'min_delivery_time'  => rand(1, 3),

		];
	}
}
