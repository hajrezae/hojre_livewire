<div id="tax-form">
    <form wire:submit.prevent="{{ $action }}">
        <x-admin.card.simple title="{{ $action == 'create' ? 'ساخت کلاس مالیاتی جدید' : 'در حال ویرایش کلاس مالیاتی : ' . $tax->label }}" icon="{{ $action == 'create' ? 'fas fa-plus' : 'fas fa-pen'}}">
            <x-slot name="body">
                <div class="form-row">
                    <div class="col-12">
                        <x-admin.form.input wire:model="tax.name" label="{{ __('model/tax.name') }}"/>
                    </div>
                    <div class="col-12">
                        <x-admin.form.input wire:model="tax.label" label="{{ __('model/tax.label') }}"/>
                    </div>
                    <div class="col-12">
                        <x-admin.form.input wire:model="tax.percent" type="number" input-type="group" solid label="{{ __('model/tax.percent') }}">
                            <x-slot name="prepend">
                                <i class="fas fa-percent"></i>
                            </x-slot>
                        </x-admin.form.input>
                    </div>
                </div>
            </x-slot>
            <x-slot name="footer">
                @if($action == 'create')
                    <button type="submit" class="btn btn-light-primary">
                        <i class="fas fa-plus"></i>
                        افزودن کلاس مالیاتی جدید
                    </button>
                @else
                    <button type="submit" class="btn btn-light-primary">
                        <i class="fas fa-save"></i>
                        ذخیره تغییرات
                    </button>
                @endif
            </x-slot>
        </x-admin.card.simple>
    </form>
</div>
