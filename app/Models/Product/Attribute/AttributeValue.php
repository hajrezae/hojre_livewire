<?php

namespace App\Models\Product\Attribute;

use App\Models\Product\VariantValue;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model {
	use HasFactory;

	protected $guarded = [];

	public function attribute() {
		return $this->belongsTo(Attribute::class);
	}

    public function variantValue()
    {
        return $this->belongsToMany(VariantValue::class, 'variant_values');
	}
}
