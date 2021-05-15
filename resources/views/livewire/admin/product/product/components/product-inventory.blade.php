<x-admin.card.simple
        title="انبار محصول" class="rounded-lg"
        id="product-inventory" role="tabpanel" aria-labelledby="product-info"
        wire:loading.class="overlay overlay-block"
>
    <x-slot name="toolbar">
        <button type="submit" form="product-inventory-form" class="btn btn-light-primary mx-4">
            <i class="fas fa-save"></i>
            ذخیره مشخصات انبار
        </button>
    </x-slot>
    <x-slot name="body">
        <form wire:submit.prevent="saveProductInventory" id="product-inventory-form">
            <div class="form-row">
                <div class="col-6">
                    مدیریت انبار محصول :
                </div>
                <div class="col-6">
                    <x-admin.form.switch wire:model="product.manage_stock" withIcon/>
                </div>
            </div>
            @if($product->manage_stock)
                <div class="separator separator-dashed my-5"></div>
                <div class="form-row">
                    <div class="col-6">
                        <x-admin.form.input
                                wire:model.defer="product.stock_input" label="{{__('model/product.stock_input')}}"
                        />
                    </div>
                    <div class="col-6">
                        <x-admin.form.input wire:model.defer="product.stock" label="{{__('model/product.stock')}}"/>
                    </div>
                    <div class="col-6">
                        <x-admin.form.input
                                wire:model.defer="product.stock_aisle_number"
                                label="{{__('model/product.stock_aisle_number')}}"
                        />
                    </div>
                    <div class="col-6">
                        <x-admin.form.input
                                wire:model.defer="product.stock_unit" label="{{__('model/product.stock_unit')}}"
                        />
                    </div>
                    <div class="col-6">
                        <x-admin.form.input
                                wire:model.defer="product.stock_shelf" label="{{__('model/product.stock_shelf')}}"
                        />
                    </div>
                    <div class="col-6">
                        <x-admin.form.input
                                wire:model.defer="product.stock_shelf_row"
                                label="{{__('model/product.stock_shelf_row')}}"
                        />
                    </div>
                </div>

            @else
            @endif

        </form>
        <div wire:loading.class.remove="d-none" class="overlay-layer bg-dark-o-10 d-none">
            <div class="spinner spinner-primary"></div>
        </div>
    </x-slot>
</x-admin.card.simple>





