<?php

namespace App\Models\Product;

use App\Models\Product\Attribute\Attribute;
use App\Models\Product\Attribute\AttributeValue;
use App\Models\Shop\Supplier;
use App\Services\Persian;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;


    public function getRegularPrice()
    {
        return Persian::Number(number_format($this->price));
    }

    public function getDiscountPrice()
    {
        return Persian::Number(number_format($this->discount_price));
    }

    public function isAvailable()
    {
        if ($this->manage_stock == 0) return 2;
        return $this->manage_stock && $this->stock > 0 ? true : false;
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function tags()
    {
        return $this->hasMany(Tag::class);
    }

    public function attributes()
    {
        return $this->belongsToMany(Attribute::class, 'product_attributes');
    }

    public function attributeValues()
    {
        return $this->belongsToMany(AttributeValue::class, 'product_attribute_values');
    }

    public function variants()
    {
        return $this->hasMany(Variant::class);
    }

    public function supplier()
    {
        return $this->hasOne(Supplier::class, 'id', 'supplier_id');
    }

    public function getThumbnailAttribute($image_url)
    {
        $thumbnail_url = str_replace('public/', 'public/thumbs/', $this->image_url);
        return $thumbnail_url;
    }

}
