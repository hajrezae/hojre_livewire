<?php

namespace App\Models\Product;

use App\Models\Product\Attribute\AttributeValue;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;

    public function value() {
    	return $this->hasOne(AttributeValue::class, 'id', 'attribute_value_id');
		}
}
