<?php

namespace Database\Seeders\Product;

use App\Http\Livewire\Shop\Category\CategoryIndex;
use App\Models\Product\Attribute\Attribute;
use App\Models\Product\Category;
use App\Models\Product\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = json_decode(file_get_contents(base_path('database/seeders/Product/ghabetoo_products.json')
        ));
        $url = env('APP_URL') . '/';

        foreach (range(1, 20) as $index) {
            Category::create([
                'slug'  => 'test-' . $index,
                'label' => 'تست ' . $index,
                'image' => '/media/products/' . rand(1, 22) . '.png'
            ]);
        }

        foreach ($products as $product) {
            $id = $product->ID;
            $title = $product->post_title;
            $slug = urldecode($product->post_name);

            $product_url = $url . $slug;


            Product::create([
                'id'          => $id,
                'name'        => $title,
                'slug'        => $slug,
                'product_url' => $product_url,
                'image_url'   => '/media/products/' . rand(1, 22) . '.png'
            ]);

        }


    }
}
