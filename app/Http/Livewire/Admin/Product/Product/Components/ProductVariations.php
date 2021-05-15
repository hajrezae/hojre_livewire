<?php

namespace App\Http\Livewire\Admin\Product\Product\Components;

use App\Models\Product\Variant;
use App\Models\Product\VariantValue;
use Illuminate\Support\Arr;
use Livewire\Component;
use Livewire\WithPagination;

class ProductVariations extends Component {
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $product;
    public $productVariants;

    //Action
    public function createVariations()
    {
        $attributes = $this->product->attributeValues->groupBy('attribute_id');
        $combinations = Arr::crossJoin(...$attributes->toArray());

        $this->product->variants()->delete();
        VariantValue::where('product_id', $this->product->id)->delete();
        foreach ($combinations as $i => $combination) {
            $newVariant = $this->product->variants()->create(['variant_id' => $i + 1]);
            foreach ($combination as $attributeValue) {
                $newVariant->variantValues()->create([
                    'product_id'         => $this->product->id,
                    'attribute_id'       => $attributeValue['attribute_id'],
                    'attribute_value_id' => $attributeValue['id']
                ]);
            }
        }
        $this->productVariants = VariantValue::where('product_id', $this->product->id)->with(['attributeValue'])->get();
        $this->productVariants = collect($this->productVariants)->groupBy('variant_id');
    }

    public function mount()
    {
        $this->productVariants = VariantValue::where('product_id', $this->product->id)->with(['attributeValue'])->get();
        $this->productVariants = collect($this->productVariants)->groupBy('variant_id');
    }

    public function render()
    {

        return view('livewire.admin.product.product.components.product-variations');
    }
}
