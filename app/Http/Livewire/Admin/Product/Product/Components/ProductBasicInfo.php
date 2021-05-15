<?php

namespace App\Http\Livewire\Admin\Product\Product\Components;

use App\Models\Product\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Livewire\Component;

class ProductBasicInfo extends Component {
    public $product;
//    public $listeners = [];
    //Event Listeners


    //rules
    public function rules()
    {
        return [
            'product.name'        => ['nullable'],
            'product.slug'        => ['nullable'],
            'product.product_url' => ['nullable'],
            'product.type'        => [Rule::in(['simple', 'variable'])]
        ];
    }


    //Actions
    public function saveProductBasicInfo()
    {
        sleep(1);
        $this->validate();

        DB::beginTransaction();
        try {
            $this->product->save();

            $this->dispatchBrowserEvent('success', ['message' => 'اطلاعات اولیه محصول با موفقیت ذخیره شد.']);
            $this->emit('productUpdated');
        } catch (\Exception $e) {
            DB::rollback();
        }
        DB::commit();
    }

    public function render()
    {
        return view('livewire.admin.product.product.components.product-basic-info');
    }

    //Update Methods
    public function updatedProductType()
    {
        sleep(1);
        $this->validateOnly('product.type');
        DB::beginTransaction();
        try {
            $this->product->save();

            $this->emit('productUpdated');
        } catch (\Exception $e) {
            DB::rollback();
        }
        DB::commit();
    }
}
