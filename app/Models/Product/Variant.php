<?php

namespace App\Models\Product;

use App\Models\Product\Attribute\AttributeValue;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variant extends Model {
	use HasFactory;

	protected $table   = 'product_variants';
	protected $guarded = [];

	public $timestamps = false;

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
	}

    public function variantValues()
    {
        return $this->hasMany(VariantValue::class, 'variant_id', 'variant_id');
	}

    public function attributeValue()
    {
        return $this->belongsToMany(AttributeValue::class, 'variant_values');
	}
}
