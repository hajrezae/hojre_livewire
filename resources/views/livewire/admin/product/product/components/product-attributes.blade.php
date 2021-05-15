<x-admin.card.simple
        title="ویژگی های محصول"
        class="rounded-lg"
        id="product-attributes"
        role="tabpanel"
        aria-labelledby="product-attributes"
        wire:loading.class="overlay overlay-block"
>
    <x-slot name="toolbar">
        <div x-data>
            <button
                    type="submit"
                    @click="
                        let attributeValues = Array.from($('.select-attribute-values'));
                                    let values = {};
                                    attributeValues.forEach(attribute => {
                                        const attributeId = $(attribute).attr('data-attributeId');
                                        if($(attribute).val().length > 0) {
                                            values[attributeId] = [];
                                            values[attributeId] = $(attribute).val();
                                        }
                                    })

                                    $wire.saveProductAttributes(values);
                    "
                    class="btn btn-light-primary"
            >
                <i class="fas fa-save"></i>
                ذخیره ویژگی های محصول
            </button>
        </div>
    </x-slot>
    <x-slot name="body">
        <div
                class="form-row" x-data="{selectedAttribute: null}"
                x-init="
                        attributesList = $($refs.attributesList).select2({width: '100%'});
                        attributesList.on('change', function(event) {
                            selectedAttribute = event.target.value;
                        });
                        $wire.on('attributeAdded', function(vals) {
                            $(attributesList).find(`option`).attr('disabled', false);
                            vals.forEach(function(attribute) {
                                $(attributesList).find(`option[value='${attribute.id}']`).attr('disabled', true);
                                $(attributesList).val(null).trigger('change');
                                selectedAttribute = null;
                            })
                        })
                        $wire.on('attributeDeleted', function(attributeId) {
                            $(attributesList).find(`option`).attr('disabled', false);
                            vals.forEach(function(attribute) {
                                $(attributesList).find(`option[value='${attribute.id}']`).attr('disabled', true);
                                $(attributesList).val(null).trigger('change');
                                selectedAttribute = null;
                            })
                        })
                    "
        >
            <div
                    class="col-10"
                    wire:ignore

            >
                <x-admin.form.select
                        x-ref="attributesList"
                        id="attributesList"
                        data-placeholder="لطفا یک گزینه را انتخاب کنید"
                >
                    @foreach(\App\Models\Product\Attribute\Attribute::all() as $attribute)
                        <option></option>
                        <option
                                value={{ $attribute->id }}
                                {{ $product->attributes->contains($attribute) ? 'disabled': null }}
                        >{{ $attribute->label }}</option>

                    @endforeach
                </x-admin.form.select>
            </div>
            <div class="col-2">
                <button
                        x-bind:disabled="selectedAttribute == null" class="btn btn-block btn-light-primary"
                        @click="$wire.addAttribute(selectedAttribute)"
                >
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
                @forelse($productAttributes as $attribute)
                    <div class="card">
                        <div
                                class="card-header"
                                id="{{ $attribute['name'] }}"
                        >
                            <div
                                    class="card-title collapsed"
                                    data-toggle="collapse"
                                    data-target="#collapse{{ $attribute->name }}"
                                    aria-expanded="false"
                            >
                                <i
                                        wire:click.stop="deleteAttribute({{ $attribute->id }})"
                                        class="flaticon-delete text-danger"
                                ></i>
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
                                    x-data
                                    x-init="
                        attributeValues = $($refs.attributeValues).select2({width: '100%'});

                    "
                            >
                                <x-admin.form.select
                                        multiple
                                        x-ref="attributeValues"
                                        class="select-attribute-values"
                                        data-attributeId="{{ $attribute->id }}"
                                        id="attribute-values-{{ $attribute->id }}"
                                        label="مقادیر ویژگی {{ $attribute->label }}"
                                >
                                    @foreach($attribute->attributeValues as $value)
                                        <option
                                                {{ $product->attributeValues->contains($value) ? 'selected' : null}}
                                                value="{{ $value->id }}">{{ $value->label }}</option>
                                    @endforeach
                                </x-admin.form.select>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="text-center">
                        <h4 class="text-muted p-10">هنوز هیچ ویژگی ای انتخاب نشدده است</h4>
                    </div>
                @endforelse
            </div>

        </div>
        <div wire:loading.class.remove="d-none" class="overlay-layer bg-dark-o-10 d-none">
            <div class="spinner spinner-primary"></div>
        </div>
    </x-slot>
</x-admin.card.simple>








