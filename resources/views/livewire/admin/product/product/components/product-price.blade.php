<x-admin.card.simple title="تنظیمات قیمت محصول"
                     class="rounded-lg"
                     id="product-price"
                     role="tabpanel"
                     aria-labelledby="product-info"
>
    <x-slot name="toolbar">
        <button type="submit"
                form="save-product-price-form"
                class="btn btn-light-primary">
            <i class="fas fa-save"></i>
            ذخیره قیمت محصول
        </button>
    </x-slot>
    <x-slot name="body">
        <form wire:submit.prevent="saveProductPrice"
              id="save-product-price-form">
            <div class="form-row">
                <div class="col-12 col-md-6">
                    <x-admin.form.input wire:model.defer="product.price"
                                        input-type="group"
                                        dir="ltr"
                                        label="{{ __('model/product.price') }}">
                        <x-slot name="prepend">
                            <i class="fas fa-money-bill-wave"></i>
                        </x-slot>
                        <x-slot name="append">
                            {{ \App\Services\Shop::currency() ?? 'ریال' }}
                        </x-slot>
                    </x-admin.form.input>
                </div>
                <div class="col-12 col-md-6">
                    <x-admin.form.input wire:model.defer="product.discount_price"
                                        input-type="group"
                                        dir="ltr"
                                        label="{{ __('model/product.discount_price') }}">
                        <x-slot name="prepend">
                            <i class="fas fa-percent"></i>
                        </x-slot>
                        <x-slot name="append">
                            {{ \App\Services\Shop::currency() ?? 'ریال' }}
                        </x-slot>
                    </x-admin.form.input>
                </div>
                <div class="col-12 col-md-6">
                    <x-admin.form.input wire:model.defer="product.buy_price"
                                        input-type="group"
                                        dir="ltr"
                                        label="{{ __('model/product.buy_price') }}">
                        <x-slot name="prepend">
                            <i class="fas fa-warehouse"></i>
                        </x-slot>
                        <x-slot name="append">
                            {{ \App\Services\Shop::currency() ?? 'ریال' }}
                        </x-slot>
                    </x-admin.form.input>
                </div>
            </div>
        </form>
        <div class="overlay-layer bg-dark-o-10 d-none">
            <div class="spinner spinner-primary"></div>
        </div>
    </x-slot>
</x-admin.card.simple>
