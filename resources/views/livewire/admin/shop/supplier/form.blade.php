<div>
    <form wire:submit.prevent="{{$action}}">
        <div class="modal-header">
            @if($action == 'create')
                <h5>
                    <i class="fas fa-plus mr-3"></i>
                    افزودن تامین کننده
                </h5>
            @else
                <h5>
                    <i class="fas fa-pen mr-3"></i>
                    ویرایش تامین کننده
                </h5>
            @endif
            <button wire:click="clearSupplier" type="button" class="close" data-dismiss="modal">
                <i aria-hidden="true" class="ki ki-close"></i>
            </button>
        </div>
        <div class="modal-body">
            <h4>مشخصات کلی فروشگاه :</h4>
            <div class="separator separator-dashed my-5"></div>
            <div class="form-row">
                <div class="col-12 col-md-4">
                    <x-admin.form.input wire:model="supplier.username" input-type="group" solid label="{{ __('model/supplier.username') }}" dir="ltr">
                        <x-slot name="prepend">
                            <i class="fas fa-user-plus"></i>
                        </x-slot>
                    </x-admin.form.input>
                </div>
                <div class="col-12 col-md-4">
                    <x-admin.form.input wire:model="supplier.shop_name" input-type="group" solid label="{{ __('model/supplier.shop_name') }}">
                        <x-slot name="prepend">
                            <i class="fas fa-store"></i>
                        </x-slot>
                    </x-admin.form.input>
                </div>
                <div class="col-12 col-md-4">
                    <x-admin.form.input wire:model="supplier.password" input-type="group" type="password" solid label="{{ __('model/supplier.password') }}" hasButton dir="ltr">
                        <x-slot name="prepend">
                            <button type="button" class="btn btn-light-primary">ساخت رمز تصادفی</button>
                        </x-slot>
                    </x-admin.form.input>
                </div>
            </div>
            <div class="form-row">
                <div class="col-12 col-md-3">
                    <x-admin.form.input wire:model="supplier.manager_first_name" input-type="group" solid label="{{ __('model/supplier.manager_first_name') }}">
                        <x-slot name="prepend">
                            <i class="fas fa-user-plus"></i>
                        </x-slot>
                    </x-admin.form.input>
                </div>
                <div class="col-12 col-md-3">
                    <x-admin.form.input wire:model="supplier.manager_last_name" input-type="group" solid label="{{ __('model/supplier.manager_last_name') }}">
                        <x-slot name="prepend">
                            <i class="fas fa-user-tie"></i>
                        </x-slot>
                    </x-admin.form.input>
                </div>
                <div class="col-12 col-md-3">
                    <x-admin.form.input wire:model="supplier.contact_phone" input-type="group" solid label="{{ __('model/supplier.contact_phone') }}" dir="ltr">
                        <x-slot name="prepend">
                            <i class="fas fa-mobile"></i>
                        </x-slot>
                    </x-admin.form.input>
                </div>
                <div class="col-12 col-md-3">
                    <x-admin.form.input wire:model="supplier.shop_phone" input-type="group" solid label="{{ __('model/supplier.shop_phone') }}" dir="ltr">
                        <x-slot name="prepend">
                            <i class="fas fa-phone"></i>
                        </x-slot>
                    </x-admin.form.input>
                </div>
            </div>
            <div class="form-row">
                <div class="col-12 col-md-6">
                    <x-admin.form.input wire:model="supplier.contact_email" input-type="group" solid label="{{ __('model/supplier.contact_email') }}" dir="ltr">
                        <x-slot name="prepend">
                            <i class="fas fa-envelope-open"></i>
                        </x-slot>
                    </x-admin.form.input>
                </div>
                <div class="col-12 col-md-3">
                    <x-admin.form.input wire:model="supplier.postcode" input-type="group" solid label="{{ __('model/supplier.postcode') }}" dir="ltr">
                        <x-slot name="prepend">
                            <i class="fa fa-mail-bulk"></i>
                        </x-slot>
                    </x-admin.form.input>
                </div>
                <div class="col-12 col-md-3">
                    <x-admin.form.input wire:model="supplier.manager_national_code" input-type="group" solid label="{{ __('model/supplier.manager_national_code') }}" dir="ltr">
                        <x-slot name="prepend">
                            <i class="fa fa-mail-bulk"></i>
                        </x-slot>
                    </x-admin.form.input>
                </div>
            </div>
            <div class="form-row">
                <div class="col-6">
                    <x-admin.form.select wire:model="supplier.is_manufacturer" label="{{ __('model/supplier.is_manufacturer') }}">
                        <option value="0">خیر</option>
                        <option value="1">تولید کننده است</option>
                    </x-admin.form.select>
                </div>
                <div class="col-6">
                    <x-admin.form.select wire:model="supplier.active" label="{{ __('model/supplier.active') }}">
                        <option value="0">غیر فعال</option>
                        <option value="1">فعال</option>
                    </x-admin.form.select>
                </div>
            </div>
            <div class="form-row">
                <div class="col-12 col-md-6">
                    <x-admin.form.input wire:model="supplier.min_delivery_time" input-type="group" type="number" solid label="{{ __('model/supplier.min_delivery_time') }}" dir="ltr">
                        <x-slot name="prepend">
                            <i class="fas fa-clock"></i>
                        </x-slot>
                        <x-slot name="append">
                            روز
                        </x-slot>
                    </x-admin.form.input>
                </div>
                <div class="col-12 col-md-6">
                    <x-admin.form.input wire:model="supplier.max_delivery_time" input-type="group" type="number" solid label="{{ __('model/supplier.max_delivery_time') }}" dir="ltr">
                        <x-slot name="prepend">
                            <i class="fas fa-calendar-day"></i>
                        </x-slot>
                        <x-slot name="append">
                            روز
                        </x-slot>
                    </x-admin.form.input>
                </div>
            </div>
            <h4 class="mt-10">مشخصات پرداخت فروشگاه :</h4>
            <div class="separator separator-dashed my-5"></div>
            <div class="form-row">
                <div class="col-12 col-md-6">
                    <x-admin.form.input wire:model="supplier.sheba_number" input-type="group" solid label="{{ __('model/supplier.sheba_number') }}" dir="ltr">
                        <x-slot name="prepend">
                            <i class="fas fa-credit-card"></i>
                        </x-slot>
                        <x-slot name="append">
                            - IR
                        </x-slot>
                    </x-admin.form.input>
                </div>
                <div class="col-12 col-md-6">
                    <x-admin.form.select wire:model="supplier.cash_out_method" input-type="group" solid label="{{ __('model/supplier.cash_out_method') }}">
                        <option value="before" selected>قبل از تحویل کالا</option>
                        <option value="after">بعد از تحویل کالا</option>
                    </x-admin.form.select>
                </div>
            </div>
            <h4 class="mt-10">مشخصات تکمیلی فروشگاه :</h4>
            <div class="separator separator-dashed my-5"></div>
            <div class="form-row">
                <div class="col-12 col-md-12">
                    <x-admin.form.textarea wire:model="supplier.about" label="{{ __('model/supplier.about') }}" rows="10"/>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button wire:click="clearSupplier" type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">بستن</button>
            @if($action == 'create')
                <button wire:click="create" type="button" class="btn btn-primary font-weight-bold">افزودن تامین کننده</button>
            @else
                <button wire:click="update" type="button" class="btn btn-primary font-weight-bold">ذخیره تامین کننده</button>
            @endif
        </div>
    </form>
</div>
