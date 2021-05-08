<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model {
	use HasFactory;

	protected $guarded = null;

	public function childs() {
		return $this->where('parent_id', $this->id)->get();
	}
}
