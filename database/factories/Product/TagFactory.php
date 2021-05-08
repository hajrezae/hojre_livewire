<?php

namespace Database\Factories\Product;

use App\Models\Product\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Collection;

class TagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tag::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */

	public function definition()
    {
    		$number = rand(1, 100000);
    		$second = rand(2000, 3000);
        return [
					'label' => 'تگ شماره ' . $number . $second,
					'name' => 'tag-number-' . $number . $second,
					'description' => ' این تگ شماره  ' . $number . $second . 'است.'
        ];
    }
}
