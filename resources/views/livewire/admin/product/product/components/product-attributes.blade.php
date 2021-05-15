<x-admin.card.simple
        title="انبار محصول"
        class="rounded-lg"
        id="product-attributes"
        role="tabpanel"
        aria-labelledby="product-info"
>
    <x-slot name="toolbar">
        <button
                type="submit"
                class="btn btn-light-primary mx-4"
        >
            <i class="fas fa-save"></i>
            ذخیره ویژگی های محصول
        </button>
    </x-slot>
    <x-slot name="body">
        <form id="save-product-attributes-form">
            <div class="form-row">
                <div
                        class="col-10"
                        wire:ignore
                >
                    <x-admin.form.select
                            id="attributesList"
                            placeholder="لطفا یک گزینه را انتخاب کنید"
                    >
                        @foreach(\App\Models\Product\Attribute\Attribute::all() as $attribute)
                            <option value="{{ $attribute->id }}" {{ $product->attributes->contains($attribute) ? 'disabled': null }}>{{ $attribute->label }}</option>
                        @endforeach
                    </x-admin.form.select>
                </div>
                <div class="col-2">
                    <button class="btn btn-block btn-light-primary">
                        افزودن ویژگی
                    </button>
                </div>
            </div>
            <div class="separator separator-dashed my-5"></div>

            <div id="product-attributes-list">
                <div
                        class="accordion accordion-solid accordion-toggle-plus"
                        id="attributes-list"
                >
                    @foreach(\App\Models\Product\Attribute\Attribute::all() as $attribute)
                        <div class="card">
                            <div
                                    class="card-header"
                                    id="{{ $attribute->name }}"
                            >
                                <div
                                        class="card-title collapsed"
                                        data-toggle="collapse"
                                        data-target="#collapse{{ $attribute->name }}"
                                        aria-expanded="false"
                                >
                                    <i class="flaticon-delete text-danger"></i>
                                    {{ $attribute->label }}
                                </div>
                            </div>
                            <div
                                    id="collapse{{ $attribute->name }}"
                                    class="collapse"
                                    data-parent="#attributes-list"
                                    style=""
                            >
                                <div
                                        class="card-body"
                                        wire:ignore
                                >
                                    <x-admin.form.select
                                            multiple
                                            class="select-attribute-values"
                                            id="attribute-values-{{ $attribute->id }}"
                                            label="مقادیر ویژگی {{ $attribute->label }}"
                                    >
                                        @foreach($attribute->attributeValues as $value)
                                            <option {{ $product->attributes->contains($value) ? 'selected' : null}} value="{{ $value->id }}">{{ $value->label }}</option>
                                        @endforeach
                                    </x-admin.form.select>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </form>
        <div class="overlay-layer bg-dark-o-10 d-none rounded-lg">
            <div class="spinner spinner-primary"></div>
        </div>
    </x-slot>
</x-admin.card.simple>








