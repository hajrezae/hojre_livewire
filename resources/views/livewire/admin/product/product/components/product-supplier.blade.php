<x-admin.card.simple
        title="تامین کننده محصول"
        class="rounded-lg"
        role="tabpanel"
        aria-labelledby="product-info"
>
    <x-slot name="toolbar">
        <button
                type="submit"
                form="product-supplier-form"
                class="btn btn-light-primary"
        >
            <i class="fas fa-save"></i>
            ذخیره تامین کننده محصول
        </button>
    </x-slot>
    <x-slot name="body">
        <form
                wire:submit.prevent="saveProductSupplier"
                id="product-supplier-form"
        >
            <div class="form-row align-items-center">
                <div class="col-4">
                    محصول دارای تامین کننده است
                </div>
                <div class="col-8">
                    <x-admin.form.switch wire:model="product.has_supplier"/>
                </div>
            </div>
            <div class="separator separator-dashed my-5"></div>
            @if($product->has_supplier)
                <div class="form-row">
                    <div class="col-12">
                        <x-admin.form.input
                                input-type="group"
                                solid
                                wire:model="search"
                                label="جستجوی تامین کننده"
                                placeholder="جستجو بر اساس نام کاربری و یا نام فروشگاه..."
                        >
                            <x-slot name="prepend">
                                <i class="fas fa-search bg-white"></i>
                            </x-slot>
                        </x-admin.form.input>
                    </div>
                </div>
                <div class="separator separator-dashed my-7"></div>
                @if(!is_null($product->supplier_id))
                    <label class="option {{ !$product->supplier->active ? 'bg-light' : null }}">
                                <span class="option-control">
                                    <span class="radio">
                                        <input
                                                type="radio"
                                                wire:model.defer="product.supplier_id"
                                                value="{{ $product->supplier->id }}" {{ !$product->supplier->active ? 'disabled': null}}>
                                        <span></span>
                                    </span>
                                </span>
                        <span class="option-label">
                                    <span class="option-head">
                                        <span class="option-title">
                                            {{ $product->supplier->shop_name }}
                                        </span>
                                        <span class="option-focus">
                                            @if($product->supplier->active)
                                                <span class="label label-inline label-light-success font-weight-bold">فعال</span>
                                            @else
                                                <span class="label label-inline label-light-danger font-weight-bold">غیر فعال</span>
                                            @endif
                                        </span>
                                    </span>
                                    <span class="option-body">
                                        {{ $product->supplier->code }}
                                    </span>
                                </span>
                    </label>
                    <div class="separator separator-dashed my-7"></div>
                @endif
            @else
                <h4 class="text-center p-10 text-muted">این محصول از فروشگاه اصلی و انبار فروشگاه تامین میشود</h4>
            @endif
            @if(!empty($suppliers))
                <div class="row">
                    <div class="col-12">
                        @foreach($suppliers as $supplier)
                            @if($product->supplier_id != $supplier->id)
                                <label class="option {{ !$supplier->active ? 'bg-light' : null }}">
                                    <span class="option-control">
                                        <span class="radio">
                                            <input
                                                    type="radio"
                                                    wire:model.defer="product.supplier_id"
                                                    value="{{ $supplier->id }}" {{ !$supplier->active ? 'disabled': null}}>
                                            <span></span>
                                        </span>
                                    </span>
                                    <span class="option-label">
                                        <span class="option-head">
                                            <span class="option-title">
                                                {{ $supplier->shop_name }} - {{ $supplier->username }}
                                            </span>
                                            <span class="option-focus">
                                                @if($supplier->active)
                                                    <span class="label label-inline label-light-success font-weight-bold">فعال</span>
                                                @else
                                                    <span class="label label-inline label-light-danger font-weight-bold">غیر فعال</span>
                                                @endif
                                            </span>
                                        </span>
                                        <span class="option-body">
                                            {{ $supplier->code }}
                                        </span>
                                    </span>
                                </label>
                            @endif
                        @endforeach
                    </div>
                    <div class="col-12 mt-2">
                        {{ !empty($supplier) ? $suppliers->links() : null }}
                    </div>
                </div>
            @endif
        </form>
        <div
                wire:loading.class.remove="d-none"
                wire:target="save"
                class="overlay-layer bg-dark-o-10 d-none"
        >
            <div class="spinner spinner-primary"></div>
        </div>
    </x-slot>
</x-admin.card.simple>





