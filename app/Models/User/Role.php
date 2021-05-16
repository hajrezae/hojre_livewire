<?php

namespace App\Models\User;

use App\Models\Price;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model {
    use HasFactory;

    protected $guarded = [];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_role');
    }

    public function permissions()
    {
        return $this->hasMany(Permission::class);
    }

    public function prices()
    {
        return $this->morphMany(Price::class, 'priceable');
    }

}
