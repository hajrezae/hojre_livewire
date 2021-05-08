<form wire.submit.prevent="$action">
    <div class="modal-header">
        @if($action == 'create')
            <h5 class="modal-title" id="modalHeader">
                <i class="fas fa-plus mr-3"></i>
                افزودن ویژگی جدید
            </h5>
        @else
            <h5 class="modal-title" id="modalHeader">در حال ویرایش ویژگی</h5>
        @endif
        <button wire:click="clearAttribute" type="button" class="close" data-dismiss="modal" aria-label="نزدیک">
            <i aria-hidden="true" class="ki ki-close"></i>
        </button>
    </div>
    <div class="modal-body">
        <div class="form-row">
            <div class="col-12">
                <x-admin.form.input wire:model="attribute.name" type="text" label="{{ __('model/attribute.name') }}"/>
            </div>
            <div class="col-12">
                <x-admin.form.input wire:model="attribute.label" type="text" label="{{ __('model/attribute.label') }}"/>
            </div>
            <div class="col-12">
                <x-admin.form.textarea wire:model="attribute.description" type="text" label="{{ __('model/attribute.description') }}"/>
            </div>
            <div class="col-12">
                <x-admin.form.select wire:model="attribute.style" type="text" label="{{ __('model/attribute.style') }}">
                    @foreach(['list' => 'لیست', 'button' => 'دکمه', 'image' => 'عکس', 'color' => 'رنگ', 'input' => 'ورودی', 'radio' => 'رادیو انتخابی'] as $style => $label)
                        <option value="{{ $style }}">{{ $label }}</option>
                    @endforeach
                </x-admin.form.select>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button wire:click="clearAttribute" type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">بستن</button>
        @if($action == 'create')
            <button wire:click="addAttribute" type="button" class="btn btn-primary font-weight-bold">افزودن ویژگی</button>
        @else
            <button wire:click="updateAttribute" type="button" class="btn btn-primary font-weight-bold">ذخیره تغییرات</button>
        @endif
    </div>
</form>

