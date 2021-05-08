<div id="coupon-form">
    <form wire:submit.prevent="{{ $action }}">
        <x-admin.card.simple title="{{ $action == 'create' ? 'ساخت کوپن جدید' : 'در حال ویرایش کوپن : ' . $coupon->label}}" icon="{{ $action == 'create' ? 'fas fa-plus' : 'fas fa-pen' }}" >
            <x-slot name="body">
                <div class="form-row">
                    <div class="col-12">
                        <x-admin.form.input wire:model="coupon.name" type="text" label="{{ __('model/coupon.name') }}" />
                    </div>
                    <div class="col-12">
                        <x-admin.form.input wire:model="coupon.label" type="text" label="{{ __('model/coupon.label') }}" />
                    </div>
                    <div class="col-12">
                        <x-admin.form.select wire:model="coupon.type" type="text" label="{{ __('model/coupon.type') }}">
                            <option value=null>یک گزینه را انتخاب کنید</option>
                            <option value='fixed_amount'>مبلغ ثابت بر روی سبد خرید</option>
                            <option value='percent'>درصد</option>
                        </x-admin.form.select>
                    </div>
                    <div class="col-12">
                        <x-admin.form.input wire:model="coupon.amount" min="0" max="{{ $coupon->type == 'percent' ? 100 : null }}" type="number" label="{{ __('model/coupon.amount') }}" />
                    </div>
                    <div class="col-12">
                        <x-admin.form.checkbox type="text" label="{{ __('model/coupon.apply_multiple') }}">
                            <x-admin.form.checkbox-item wire:model="coupon.apply_multiple" />
                        </x-admin.form.checkbox>
                    </div>
                    <div class="col-12">
                        <x-admin.form.input wire:model="coupon.order" type="number" label="{{ __('model/coupon.order') }}" />
                    </div>
                    <div class="col-12">
                        <x-admin.form.input wire:model="coupon.limit" type="number" label="{{ __('model/coupon.limit') }}" />
                    </div>
                    <div class="col-12">
                        <x-admin.form.input wire:model="coupon.min_price" type="text" label="{{ __('model/coupon.min_price') }}" />
                    </div>
                    <div class="col-12">
                        <x-admin.form.input wire:model="coupon.max_price" type="text" label="{{ __('model/coupon.max_price') }}" />
                    </div>
                </div>
            </x-slot>
            <x-slot name="footer">
                @if($action == 'create')
                    <button type="submit" class="btn btn-light-primary">
                        <i class="fas fa-plus"></i>
                        افزودن کوپن
                    </button>
                @else
                    <button type="submit" class="btn btn-light-primary">
                        <i class="fas fa-pen"></i>
                        ذخیره کوپن
                    </button>
                    <button type="button" wire:click="$emit('editCancelled')" class="btn btn-sm btn-light-danger">
                        <i class="flaticon2-cancel"></i>
                        لفو ویرایش
                    </button>
                @endif
            </x-slot>
        </x-admin.card.simple>
    </form>
</div>
