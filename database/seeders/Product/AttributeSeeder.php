<?php

namespace Database\Seeders\Product;

use App\Models\Product\Attribute\Attribute;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 * @return void
	 */

	protected $sampleData = [
		[
			'name'   => 'color',
			'label'  => 'رنگ',
			'style'  => 'color',
			'values' => [
				['name'  => 'red',
				 'label' => 'قرمز'
				],
				['name'  => 'black',
				 'label' => 'مشکی'
				],
				['name'  => 'blue',
				 'label' => 'آبی'
				],

			]
		],
		[
			'name'   => 'model',
			'label'  => 'مدل',
			'style'  => 'list',
			'values' => [
				['name'  => 'model-1',
				 'label' => 'مدل یک'
				],
				['name'  => 'model-2',
				 'label' => 'مدل ۲'
				],
				['name'  => 'model-3',
				 'label' => 'مدل ۳'
				],
			]
		],
		[
			'name'   => 'size',
			'label'  => 'سایز',
			'style'  => 'button',
			'values' => [
				['name'  => 'medium',
				 'label' => 'Medium'
				],
				['name'  => 'x-large',
				 'label' => 'XL'
				],
				['name'  => 'small',
				 'label' => 'SM'
				],
			]
		],
	];

	public function run() {
		foreach ($this->sampleData as $attribute) {
			$values = $attribute['values'];
			unset($attribute['values']);
			$attribute = Attribute::create($attribute);

			foreach($values as $attributeValue) {
				$attribute->attributeValues()->create($attributeValue);
			}

		}
	}
}
