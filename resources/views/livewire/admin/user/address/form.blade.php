<x-admin.card.simple title="{{ $action == 'create' ? 'افزودن آدرس کاربر' :  'در حال ویرایش آدرس : ' . $address->name}}" icon="{{ $action == 'create' ? 'flaticon-plus': 'flaticon-edit'}}" class="mb-5">
    <x-slot name="body">
        <div class="form-row">
            <div class="col-12">
                <x-admin.form.input wire:model="address.name" input-type="simple" type="text" label="{{ __('model/address.name') }}"/>
            </div>
            <div class="col-6">
                <x-admin.form.input wire:model="address.country" input-type="simple" type="text" label="{{ __('model/address.country') }}"/>
            </div>
            <div class="col-6">
                <x-admin.form.input wire:model="address.state" input-type="simple" type="text" label="{{ __('model/address.state') }}"/>
            </div>
            <div class="col-6">
                <x-admin.form.input wire:model="address.city" input-type="simple" type="text" label="{{ __('model/address.city') }}"/>
            </div>
            <div class="col-6">
                <x-admin.form.input wire:model="address.phone" input-type="simple" type="text" label="{{ __('model/address.city') }}"/>
            </div>
            <div class="col-6">
                <x-admin.form.input wire:model="address.postcode" input-type="simple" type="text" label="{{ __('model/address.city') }}"/>
            </div>
            <div class="col-6">
                <x-admin.form.input wire:model="address.number" input-type="simple" type="text" label="{{ __('model/address.city') }}"/>
            </div>
            <div class="col-6">
                <x-admin.form.input wire:model="address.door" input-type="simple" type="text" label="{{ __('model/address.city') }}"/>
            </div>
            <div class="col-12">
                <x-admin.form.textarea wire:model="address.address" rows="5" label="{{ __('model/address.address') }}">
                    {{ $address->address }}
                </x-admin.form.textarea>
            </div>
            <div class="col-12">
                <x-admin.form.textarea wire:model="address.note" rows="5" label="{{ __('model/address.note') }}">

                </x-admin.form.textarea>
            </div>
        </div>
        @if($action == 'create')
            <button wire:click="addAddress" class="btn btn-light-primary btn-block">
                افزودن
            </button>
        @else
            <button wire:click="updateAddress" class="btn btn-light-primary">
                ویرایش آدرس
            </button>
            <button wire:click="cancelEditing" class="btn btn-light-danger">
                لغو ویرایش
            </button>
        @endif

    </x-slot>
</x-admin.card.simple>
