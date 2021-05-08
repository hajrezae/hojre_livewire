<div id="product-form">
    <x-admin.common.back-button route="admin.product.index" text="محصولات"/>
    <form wire:submit.prevent="saveProduct">
        <x-admin.card.simple title="مشخصات کلی محصول" icon="fas fa-box">
            <x-slot name="toolbar">
                <select wire:model="product.type" class="form-control" style="width: 300px">
                    <option value="simple" selected>محصول ساده</option>
                    <option value="variable">محصول متغییر</option>
                </select>
                <button class="btn btn-light-primary ml-3">
                    <i class="fas fa-save"></i>
                    ذخیره محصول
                </button>
            </x-slot>
            <x-slot name="body">
                <div class="row">
                    <div class="col-12">
                        <h4>{{ __('model/product.name') }} :</h4>
                        <x-admin.form.input wire:model="product.name" class="fomr-control-lg" style="font-size: 25px"/>
                    </div>
                    <div class="col-4">
                        <x-admin.form.input wire:model="product.slug" class="fomr-control-lg" label="{{ __('model/product.slug') }}"/>
                    </div>
                    <div class="col-8">
                        <x-admin.form.input wire:model="product.url" input-type="group" label="{{ __('model/product.product_url') }}" disabled hasButton>
                            <x-slot name="prepend">
                                <button class="btn btn-primary btn-icon" type="button">
                                    <i class="fas fa-pen"></i>
                                </button>
                            </x-slot>
                            <x-slot name="append">
                                {{env('APP_URL')}}/product/
                            </x-slot>
                        </x-admin.form.input>
                    </div>
                </div>
            </x-slot>
        </x-admin.card.simple>
        <div class="row mt-5">
            <div class="col-12 col-md-9">
                <div class="product-info-sections">
                    <div class="row">
                        <div class="col-12 col-md-2">
                            <ul class="nav flex-column nav-pills bg-white p-2 rounded-lg">
                                <li class="nav-item mb-2">
                                    <a class="nav-link active" id="product-info-tab" data-toggle="tab" href="#product-info">
                                        <span class="nav-icon">
                                            <i class="flaticon2-layers"></i>
                                        </span>
                                        <span class="nav-text">کلی</span>
                                    </a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a class="nav-link" id="product-price-tab" data-toggle="tab" href="#product-price" aria-controls="product-price">
                                        <span class="nav-icon">
                                            <i class="flaticon2-layers-1"></i>
                                        </span>
                                        <span class="nav-text">قیمت</span>
                                    </a>
                                </li>
                                @if($product->type == 'variable')
                                    <li class="nav-item mb-2">
                                        <a class="nav-link" id="product-attributes-tab" data-toggle="tab" href="#product-attributes" aria-controls="product-price">
                                            <span class="nav-icon">
                                                <i class="flaticon2-layers-1"></i>
                                            </span>
                                            <span class="nav-text">ویژگی ها</span>
                                        </a>
                                    </li>
                                @endif
                                @if($product->type == 'variable')
                                    <li class="nav-item mb-2">
                                        <a class="nav-link" id="product-attributes-tab" data-toggle="tab" href="#product-attributes" aria-controls="product-price">
                                            <span class="nav-icon">
                                                <i class="flaticon-squares-1"></i>
                                            </span>
                                            <span class="nav-text">متغییر ها</span>
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                        <div class="col-12 col-md-10">
                            <div class="tab-content" id="myTabContent5">
                                <livewire:admin.product.product.components.product-info/>
                                <livewire:admin.product.product.components.product-price/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <x-admin.card.simple class="rounded-lg" title="dklsh">
                    <x-slot name="body">
                    </x-slot>
                </x-admin.card.simple>
            </div>
        </div>
    </form>
</div>
