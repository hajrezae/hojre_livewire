<?php

namespace Database\Factories\User;

use App\Models\User\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        	'name' => $this->faker->name,
					'country' => 'IR',
					'state' => 'TH',
					'city' => 'tehran',
					'address' => $this->faker->address,
					'phone' => $this->faker->phoneNumber,
					'postcode' => $this->faker->postcode,
					'number' => rand(1, 200),
					'door' => rand(100, 300),
					'lat' => null,
					'long' => null,
					'note' => $this->faker->paragraph
        ];
    }
}
