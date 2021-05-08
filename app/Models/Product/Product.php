<?php

namespace App\Models\Product;

use App\Models\Product\Attribute\Attribute;
use App\Models\Shop\Supplier;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {
	use HasFactory;

	protected $guarded = [];

	public function categories() {
		return $this->hasMany(Category::class);
	}

	public function tags() {
		return $this->hasMany(Tag::class);
	}

	public function productAttributes() {
		return $this->hasMany(ProductAttribute::class);
	}

	public function variations() {
		return $this->hasMany(Variation::class);
	}

	public function supplier() {
		return $this->hasOne(Supplier::class, 'id', 'vendor_id');
	}

	public function getThumbnailAttribute($image_url) {
		$thumbnail_url = str_replace('public/', 'public/thumbs/', $this->image_url);
		return $thumbnail_url;
	}

}
