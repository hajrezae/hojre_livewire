<?php

namespace App\Models\Product;

use App\Models\Product\Attribute\AttributeValue;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variant extends Model {
	use HasFactory;

	protected $table   = 'product_variants';
	protected $guarded = [];

	public function variation() {
		return $this->belongsTo(Variation::class);
	}

	public function attributeValue() {
		return $this->hasOne(AttributeValue::class, 'id', 'attribute_value_id');
	}
}
