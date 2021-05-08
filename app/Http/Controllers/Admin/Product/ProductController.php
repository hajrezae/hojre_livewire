<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Product\Product;
use Illuminate\Http\Request;

class ProductController extends Controller {
	public function create() {
		$product = Product::create();
		return redirect()->route('admin.product.edit', $product);
	}
}
