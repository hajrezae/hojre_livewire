<div id="discount-form">
    <div id="discount-form">
        <form wire:submit.prevent="{{ $action }}">
            <x-admin.card.simple title="{{ $action == 'create' ? 'افزودن تخفیف' : 'در حال ویرایش تخفیف : ' . $discount->label}}" icon="fas fa-user">
                <x-slot name="body">
                    <div class="form-row">
                        <div class="col-12">
                            <x-admin.form.input wire:model="discount.name" type="text" label="{{ __('model/discount.name') }}"/>
                        </div>
                        <div class="col-12">
                            <x-admin.form.input wire:model="discount.label" type="text" label="{{ __('model/discount.label') }}"/>
                        </div>
                        <div class="col-12">
                            <x-admin.form.input wire:model="discount.percent" input-type="group" solid label="{{ __('model/discount.percent') }}" dir="ltr">
                                <x-slot name="append">
                                    <i class="fas fa-percent"></i>
                                </x-slot>
                            </x-admin.form.input>
                        </div>
                        <div class="col-12">
                            <x-admin.form.select wire:model="discount.discountable_type" type="text" label="{{ __('model/discount.discountable_type') }}">
                                <option value="0">اعمال بر روی تمام محصولات</option>
                                <option value="{{ \App\Models\User\Role::class }}">اعمال بر روی یک نقش کاربری</option>
                                <option value="{{ \App\Models\Product\Category::class }}">اعمال بر روی یک یک دسته بندی</option>
                            </x-admin.form.select>
                        </div>
                        @if($selectedModel != '0' && $selectedModel != null)
                            <div class="col-12">
                                <x-admin.form.select wire:model="discount.discountable_id" type="text" label="{{ __('model/discount.discountable_id') }}">
                                    <option value=null>یک گزینه را انتخاب کنید</option>
                                    @foreach($selectedModel::all() as $model)
                                        <option value="{{ $model->id }}">{{ $model->label }}</option>
                                    @endforeach
                                </x-admin.form.select>
                            </div>
                        @endif
                        <div class="col-12">
                            <x-admin.form.textarea wire:model="discount.description" type="text" label="{{ __('model/discount.description') }}" rows="10"/>
                        </div>
                    </div>
                </x-slot>
                <x-slot name="footer">
                    @if($action == 'create')
                        <button type="submit" class="btn btn-light-primary">
                            <i class="fas fa-plus"></i>
                            افزودن تخفیف
                        </button>
                    @else
                        <button type="submit" class="btn btn-light-primary">
                            <i class="fas fa-pen"></i>
                            ذخیره تغییرات
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
</div>
