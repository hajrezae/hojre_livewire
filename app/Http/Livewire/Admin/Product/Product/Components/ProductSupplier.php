<?php

namespace App\Http\Livewire\Admin\Product\Product\Components;

use App\Models\Product\Product;
use App\Models\Shop\Supplier;
use Livewire\Component;
use Livewire\WithPagination;

class ProductSupplier extends Component {
    use WithPagination;

    public $product;
    public $search;

    protected $paginationTheme = 'bootstrap';

    //Actions
    public function saveProductSupplier()
    {
        $this->validate();
        $this->product->save();
        $this->search = null;
        $this->product = Product::find($this->product->id);
        $this->dispatchBrowserEvent('success', ['message' => 'تامین کننده محصول با موفقیت ذخیره شد']);
    }

    //Updates
    public function updatedProductHasSupplier($value)
    {
        $this->validateOnly('product.has_supplier');
        if (intval($value) === 1) {
            $this->product->has_supplier = 1;
        } else {
            $this->product->has_supplier = 0;
            $this->product->supplier_id = null;
        }

        $this->product->save();
    }

    public function render()
    {
        $suppliers = [];
        if ($this->search != '' && !is_null($this->search)) {
            $suppliers = Supplier::where('username', 'LIKE', "%$this->search%")
                                 ->orWhere('shop_name', 'LIKE', "%$this->search%")
                                 ->paginate(5);
        }

//        if($this->product->supplier_id != null) {
//            $suppliers = $this->product->supplier;
//        }

        $this->resetPage();

        return view('livewire.admin.product.product.components.product-supplier')->with(['suppliers' => $suppliers]);
    }

    public function rules()
    {
        return [
            'product.supplier_id'  => ['nullable', 'exists:suppliers,id'],
            'product.has_supplier' => ['nullable']
        ];
    }
}
