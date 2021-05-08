<?php

namespace Database\Factories\User;

use App\Models\User\Role;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Role::class;

    private $samples = [
    	[
    		'name' => 'shop-manager',
				'label' => 'مدیر فروشگاه',
				'description' => 'توانایی مدیریت سفارشات و محصولات'
			],
			[
				'name' => 'author',
				'label' => 'نویسنده',
				'description' => 'توانایی نوشتن و مدیریت مقالات و دیدگاه ها'
			],
			[
				'name' => 'author',
				'label' => 'نویسنده',
				'description' => 'توانایی نوشتن و مدیریت مقالات و دیدگاه ها'
			],
		];

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
        ];
    }
}
