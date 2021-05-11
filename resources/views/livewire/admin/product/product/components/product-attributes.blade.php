<x-admin.card.simple title="انبار محصول"
                     class="tab-pane fade rounded-lg"
                     id="product-attributes"
                     role="tabpanel"
                     aria-labelledby="product-info"
>
    <x-slot name="toolbar">
        <button type="submit"
                class="btn btn-light-primary mx-4">
            <i class="fas fa-save"></i>
            ذخیره ویژگی های محصول
        </button>
    </x-slot>
    <x-slot name="body">
        <form id="save-product-attributes-form">
            <div class="form-row">
                <div class="col-10"
                     wire:ignore>
                    <x-admin.form.select id="attributesList"
                                         placeholder="لطفا یک گزینه را انتخاب کنید">
                        @foreach(\App\Models\Product\Attribute\Attribute::all() as $attribute)
                            <option value="{{ $attribute->id }}" {{ $product->attribute->contains($attribute) ? 'disabled': null }}>{{ $attribute->label }}</option>
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
                <div class="accordion accordion-solid accordion-toggle-plus"
                     id="attributes-list">
                    @foreach(\App\Models\Product\Attribute\Attribute::find($attributes) as $attribute)
                        <div class="card">
                            <div class="card-header"
                                 id="{{ $attribute->name }}">
                                <div class="card-title collapsed"
                                     data-toggle="collapse"
                                     data-target="#collapse{{ $attribute->name }}"
                                     aria-expanded="false">
                                    <i class="flaticon-delete text-danger"></i>
                                    {{ $attribute->label }}
                                </div>
                            </div>
                            <div id="collapse{{ $attribute->name }}"
                                 class="collapse"
                                 data-parent="#attributes-list"
                                 style="">
                                <div class="card-body"
                                     wire:ignore>
                                    <x-admin.form.select multiple
                                                         class="select-attribute-values"
                                                         id="attribute-values-{{ $attribute->id }}"
                                                         label="مقادیر ویژگی {{ $attribute->label }}">
                                        @foreach($attribute->attributeValues as $value)
                                            <option {{ $product->attribute->contains($value) ? 'selected' : null}} value="{{ $value->id }}">{{ $value->label }}</option>
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
@section('scripts')
    <script>
      function addAttribute(e) {
        let attributeId = $('#attributesList').val();
        if (attributeId == null || attributeId == 0) return;
      @this.addProductAttribute(attributeId);
      }

      function saveAttributeValues() {
        let values = {};
        $('.select-attribute-values').each(function () {
          const attributeId = $(this).attr('id').replace('attribute-values-', '');
          let vals = $(this).val();
          vals.forEach((value) => {
            values[value] = {};
            values[value] = {'attribute_id': attributeId}
          })
        });

      @this.addAttributeValues(values);

      }

      Livewire.hook('component.initialized', (component) => {
        $('#attributesList').select2({
          width: '100%',
          'placeholder': 'یک ویژگی را انتخاب کنید'
        })
        $('.select-attribute-values').select2({
          width: '100%',
          'placeholder': 'یک ویژگی را انتخاب کنید'
        })
      })

      Livewire.on('attributeAdded', function (attributeId) {
        $('#attributesList').find(`option[value=${attributeId}]`).attr('disabled', 'disabled').trigger('change');
        $('#attributesList').val(null).trigger('change');

        $(`#attribute-values-${attributeId}`).select2({
          width: '100%',
          'placeholder': 'یک ویژگی را انتخاب کنید'
        })

      })

      Livewire.on('attributeDeleted', function (attributeId) {
        $('#attributesList').find(`option[value=${attributeId}]`).attr('disabled', false).trigger('change');
        $('#attributesList').val(null).trigger('change');
      })
    </script>
@endsection







