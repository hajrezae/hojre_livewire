<?php

namespace App\Models\Product;

use App\Models\Product\Attribute\AttributeValue;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variation extends Model {
	use HasFactory;

	public $timestamps = false;

	protected $guarded = [];

	protected $table = 'product_variations';

	public function product() {
		return $this->belongsTo(Product::class);
	}

	public function attributes() {
		return $this->belongsToMany(AttributeValue::class, 'product_attribute');
	}

	public function variants() {
		return $this->hasMany(Variant::class);
	}
}
