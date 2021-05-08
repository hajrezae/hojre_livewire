<?php

namespace App\Http\Livewire\Admin\Shop\Tax;

use Livewire\Component;

class TaxIndex extends Component
{
    public function render()
    {
        return view('livewire.admin.shop.tax.tax-index')
					->extends('admin.layout.default')
					->section('content');
    }
}
