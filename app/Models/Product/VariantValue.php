<?php

namespace App\Models\Product;

use App\Models\Product\Attribute\Attribute;
use App\Models\Product\Attribute\AttributeValue;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VariantValue extends Model
{
    use HasFactory;
    protected $table = 'variant_values';
    protected $guarded = [];

    public function variant()
    {
        return $this->belongsTo(Variant::class, 'variant_id', 'variant_id');
    }

    public function attribute()
    {
        return $this->hasOne(Attribute::class, 'attribute_id', 'attribute_id');
    }

    public function attributeValue()
    {
        return $this->hasOne(AttributeValue::class, 'attribute_value_id', 'attribute_value_id');
    }
}
