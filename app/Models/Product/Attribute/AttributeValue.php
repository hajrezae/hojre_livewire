<?php

namespace App\Models\Product\Attribute;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model {
	use HasFactory;

	protected $guarded = [];

	public function attribute() {
		return $this->belongsTo(Attribute::class);
	}
}
