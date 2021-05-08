<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'username' => $this->faker->userName . '-' . rand(1, 1000),
            'email' => $this->faker->unique()->safeEmail . '-' . rand(1, 1000),
						'phone' => $this->faker->unique()->phoneNumber . '-' . rand(1, 1000),
						'instagram' => $this->faker->unique()->userName . '-' . rand(1, 1000),
						'twitter' => $this->faker->unique()->userName . '-' . rand(1, 1000),
                        'wallet' => rand(300000, 10000000),
						'national_code' => $this->faker->unique()->postcode . '-' . rand(1, 1000),
						'avatar_url' => '/admin/media/users/300_' . rand(1, 25) . '.jpg',
            'password' => '$2y$10$NvA5HmiGdIr2zh6mW2t04emT0cfCN4saumDGv.JbTjzoc2mZ7ZlPK', // password 123456789

            'remember_token' => Str::random(10),
        ];
    }
}
