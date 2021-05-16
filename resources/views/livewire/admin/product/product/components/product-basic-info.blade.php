<x-admin.card.simple
        title="مشخصات اولیه محصول"
        icon="fas fa-box"
        wire:loading.class="overlay overlay-block"
>
    <x-slot name="toolbar">
        <select
                wire:model="product.type"
                class="form-control"
                style="width: 300px"
        >
            <option value="simple">محصول ساده</option>
            <option value="variable">محصول متغییر</option>
        </select>
        <button
                type="submit"
                form='product-basic-info-form'
                class="btn btn-light-primary ml-3"
        >
            <i class="fas fa-save"></i>
            ذخیره
        </button>
    </x-slot>
    <x-slot name="body">
        <form
                wire:submit.prevent="saveProductBasicInfo"
                id="product-basic-info-form"
        >
            <div class="row">
                <div class="col-12">
                    <h4>{{ __('model/product.name') }} :</h4>
                    <x-admin.form.input
                            wire:model.defer="product.name"
                            class="form-control-lg"
                            style="font-size: 25px"
                    />
                </div>
                <div class="col-4">
                    <x-admin.form.input
                            wire:model.defer="product.slug"
                            label="{{ __('model/product.slug') }} (ترجیحا به انگلیسی)"
                            dir="ltr"
                    />
                </div>
                <div class="col-8">
                    <x-admin.form.input
                            wire:model.defer="product.slug"
                            input-type="group"
                            label="{{ __('model/product.product_url') }}"
                            disabled
                            dir="ltr"
                            hasButton
                    >
                        <x-slot name="append">
                            <span dir="ltr">{{env('APP_URL')}} /product/</span>
                        </x-slot>
                    </x-admin.form.input>
                </div>
            </div>
            <div
                    wire:loading.class.remove="d-none"
                    wire:target="saveProductBasicInfo"
                    class="overlay-layer bg-dark-o-10 d-none"
            >
                <div class="spinner spinner-primary"></div>
            </div>
        </form>
    </x-slot>
</x-admin.card.simple>
