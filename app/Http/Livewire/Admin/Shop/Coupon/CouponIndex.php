<?php

namespace App\Http\Livewire\Admin\Shop\Coupon;

use Livewire\Component;

class CouponIndex extends Component
{
    public function render()
    {
        return view('livewire.admin.shop.coupon.coupon-index')
					->extends('admin.layout.default')
					->section('content');
    }
}
