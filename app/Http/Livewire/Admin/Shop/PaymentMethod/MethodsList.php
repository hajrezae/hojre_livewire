<?php

namespace App\Http\Livewire\Admin\Shop\PaymentMethod;

use Livewire\Component;

class MethodsList extends Component
{
    public function render()
    {
        return view('livewire.admin.shop.payment-method.methods-list')
            ->extends('admin.layout.default')
            ->section('content');
    }
}
