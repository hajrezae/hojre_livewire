<x-admin.card.simple title="اطلاعات کلی محصول"
                     class="card-custom tab-pane show active fade rounded-lg"
                     id="product-info"
                     role="tabpanel"
                     aria-labelledby="product-info"
                     x-data="{selectedTax: ''}"
                     x-init="() => {
    select2 = $($refs.select).select2();
    select2.on('select2:select', (event) => {
      selectedTax = event.target.value;
    });
    $watch('selectedTax', (value) => {
      select2.val(value).trigger('change');
      $wire.set('product.tax_id', value)
    });
  }"
>
    <x-slot name="toolbar">
        <button wire:click="saveProductInfo"
                type="button"
                class="btn btn-light-primary">
            <i class="fas fa-save"></i>
            ذخیره اطلاعات کلی محصول
        </button>
    </x-slot>
    <x-slot name="body">
        <div class="overlay-wrapper">
            <div class="form-row">
                <div class="col"
                     wire:ignore
                >
                    <x-admin.form.select x-ref="select"
                                         label="{{ __('model/product.tax') }}"
                                         wire:model="product.tax_id"
                                         data-placeholder="یک کلاس مالیاتی انتخاب کنید"

                    >
                        <option></option>
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
                        <x-admin.form.checkbox-item wire:model.defer="product.sell_individual"
                                                    value="1"/>
                    </x-admin.form.checkbox>
                </div>
            </div>
            <div class="separator separator-dashed my-5"></div>
            <div class="form-row">
                <div class="col">
                    <x-admin.form.checkbox label="فروش اقساطی :">
                        <x-admin.form.checkbox-item wire:model.defer="product.sell_with_credit"
                                                    value="1"/>
                    </x-admin.form.checkbox>
                </div>
            </div>
            <div class="separator separator-dashed my-5"></div>
            <div class="form-row">
                <div class="col">
                    <x-admin.form.checkbox label="اجازه پیش فروش محصول :">
                        <x-admin.form.checkbox-item wire:model.defer="product.preorder"
                                                    value="1"/>
                    </x-admin.form.checkbox>
                </div>
            </div>
        </div>
        <div wire:loading.class.remove="d-none"
             wire:target="save"
             class="overlay-layer bg-dark-o-10 d-none">
            <div class="spinner spinner-primary"></div>
        </div>
    </x-slot>
</x-admin.card.simple>
