<?php

namespace App\Http\Livewire\Admin\Shop\Discount;

use Livewire\Component;

class DiscountIndex extends Component
{
    public function render()
    {
        return view('livewire.admin.shop.discount.discount-index')
					->extends('admin.layout.default')
					->section('content');
    }
}
