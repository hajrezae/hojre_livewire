<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variation extends Model {
	use HasFactory;

	protected $table = 'product_variations';

	public function product() {
		return $this->belongsTo(Product::class);
	}

	public function variants() {
		return $this->hasMany(Variant::class);
	}
}
