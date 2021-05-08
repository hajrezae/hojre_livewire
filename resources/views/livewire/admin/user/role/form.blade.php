<div id="role-form">
    <form wire:submit.prevent="{{ $action }}">
        <x-admin.card.simple title="{{ $action == 'create' ? 'افزودن نقش کاربری جدید' : 'در حال ویرایش نقش کاربری : ' . $role->label}}" icon="fas fa-user">
            <x-slot name="body">
                <div class="form-row">
                    <div class="col-12">
                        <x-admin.form.input wire:model="role.name" type="text" label="{{ __('model/role.name') }}"/>
                    </div>
                    <div class="col-12">
                        <x-admin.form.input wire:model="role.label" type="text" label="{{ __('model/role.label') }}"/>
                    </div>
                    <div class="col-12">
                        <x-admin.form.textarea wire:model="role.description" type="text" label="{{ __('model/role.description') }}" rows="10"/>
                    </div>
                </div>
            </x-slot>
            <x-slot name="footer">
                @if($action == 'create')
                    <button type="submit" class="btn btn-light-primary">
                        <i class="fas fa-plus"></i>
                        افزودن نقش کاربری جدید
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
