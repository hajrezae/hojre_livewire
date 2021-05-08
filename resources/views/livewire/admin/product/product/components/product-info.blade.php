<x-admin.card.simple title="اطلاعات کلی محصول" class="tab-pane show active fade rounded-lg" id="product-info" role="tabpanel" aria-labelledby="product-info">
    <x-slot name="toolbar">
        <button wire:click="$emit('saveProductInfo')" type="button" class="btn btn-light-primary">
            <i class="fas fa-save"></i>
            ذخیره اطلاعات کلی محصول
        </button>
    </x-slot>
    <x-slot name="body">
        <div class="form-row">
            <div class="col">
                <x-admin.form.select wire:model="product.tax_id" label="{{ __('model/product.tax') }}">
                    @foreach(\App\Models\Shop\Tax::all() as $tax)
                        <option value="{{ $tax->id }}">{{ $tax->label }}</option>
                    @endforeach
                </x-admin.form.select>
            </div>
        </div>
        <div class="separator separator-dashed my-5"></div>
        <div class="form-row">
            <div class="col">
                <x-admin.form.checkbox label="فروش تکی محصول (محصول فقط به صورت تکی فروخته خواهد شد) : ">
                    <x-admin.form.checkbox-item wire:model="product.sell_individual" value="1"></x-admin.form.checkbox-item>
                </x-admin.form.checkbox>
            </div>
        </div>
    </x-slot>
</x-admin.card.simple>
