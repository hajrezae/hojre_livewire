<?php

namespace App\Http\Livewire\Admin\Product\Product\Components;

use App\Models\Product\Attribute\Attribute;
use App\Models\Product\Product;
use Livewire\Component;

class ProductAttributes extends Component {
    public $product;
    public $productAttributes;

    //Actions
    public function addAttribute($attributeId)
    {
        $attribute = Attribute::find($attributeId);
        if ($this->productAttributes->contains($attribute)) {
            return;
        }
        $this->productAttributes->push($attribute);
        $this->emit('attributeAdded', $this->productAttributes);
    }

    public function deleteAttribute($attributeId)
    {
        $this->productAttributes = $this->productAttributes->except(['id' => $attributeId]);
        $this->emit('attributeDeleted', $this->productAttributes);
    }

    public function saveProductAttributes($values)
    {
        $attributes = array_keys($values);
        $this->product->attributes()->sync($attributes);

        $vals = [];
        foreach ($values as $attribute_id => $attributeValues) {
            foreach ($attributeValues as $value) {
                $vals[$value] = ['attribute_id' => $attribute_id];
            }
        }

        $this->product->attributeValues()->sync($vals);

        $this->product = Product::find($this->product->id);
        $this->productAttributes = $this->product->attributes;
        $this->emit('$refresh');
        $this->emit('attributeAdded', $this->productAttributes);
        $this->dispatchBrowserEvent('success', ['message' => 'ویژگی های محصول با موفقیت ذخیره شد']);
    }

    public function mount()
    {
        $this->productAttributes = $this->product->attributes()->orderBy('order', 'asc')->get()->keyBy('id');
    }

    public function render()
    {
        return view('livewire.admin.product.product.components.product-attributes');
    }
}
