<div class="row justify-content-center">
    <div class="col-12 text-center text-md-left">
        <x-admin.form.avatar wire:model="avatar" :image="asset($user->avatar_url)"/>
    </div>
</div>
<h4 class="mt-5 text-muted">
    <i class="fas fa-star-of-life text-danger mx-4"></i>
    اطلاعات ضروری برای ثبت نام کاربر
</h4>
<div class="separator separator-dashed my-5"></div>
{{--User Required Information--}}
<div class="form-row mt-2">
    <div class="col-12 col-md-6">
        <x-admin.form.input wire:model="user.username" type="text" class="form-control-solid" label="{{ __('model/user.username') }}"/>
    </div>
    <div class="col-12 col-md-6">
        <x-admin.form.input wire:model="user.phone" input-type="withIcon" icon="flaticon2-phone" type="text" class="form-control-solid" label="{{ __('model/user.phone') }}" caption="شماره تلفن همراه کاربر (۱۱رقم)"/>
    </div>
    <div class="col-12 col-md-6">
        <x-admin.form.input wire:model="user.email" input-type="group" type="text" solid label="{{ __('model/user.email') }}">
            <x-slot name="prepend">
                <i class="flaticon-mail-1"></i>
            </x-slot>
        </x-admin.form.input>
    </div>
    <div class="col-12 col-md-6">
        <x-admin.form.input wire:model="password" input-type="group" type="password" solid label="{{ __('model/user.password') }}">
            <x-slot name="prepend">
                <i class="flaticon-lock"></i>
            </x-slot>
        </x-admin.form.input>
    </div>
</div>
<h4 class="mt-4 text-muted">اطلاعات تکمیلی</h4>
<div class="separator separator-dashed my-5"></div>
<div class="form-row">
    <div class="col-12 col-md-3">
        <x-admin.form.input wire:model="user.first_name" input-type="group" type="text" solid label="{{ __('model/user.first_name') }}">
            <x-slot name="prepend">
                <i class="fas fa-user"></i>
            </x-slot>
        </x-admin.form.input>
    </div>
    <div class="col-12 col-md-3">
        <x-admin.form.input wire:model="user.last_name" input-type="group" type="text" solid label="{{ __('model/user.last_name') }}">
            <x-slot name="prepend">
                <i class="fas fa-users"></i>
            </x-slot>
        </x-admin.form.input>
    </div>
    <div class="col-12 col-md-3">
        <x-admin.form.input wire:model="user.brand" input-type="group" type="text" solid label="{{ __('model/user.brand') }}">
            <x-slot name="prepend">
                <i class="fas fa-fingerprint"></i>
            </x-slot>
        </x-admin.form.input>
    </div>
    <div class="col-12 col-md-3">
        <x-admin.form.input wire:model="user.national_code" input-type="group" type="text" solid label="{{ __('model/user.national_code') }}">
            <x-slot name="prepend">
                <i class="fas fa-id-card"></i>
            </x-slot>
        </x-admin.form.input>
    </div>
    <div class="col-12 col-md-3">
        <x-admin.form.select wire:model="user.gender" input-type="group" type="text" select2=true solid label="{{ __('model/user.gender') }}">
            <option value=null>انتخاب نشده</option>
            <option value="man">مرد</option>
            <option value="woman">زن</option>
            <option value="other">دیگر</option>
        </x-admin.form.select>
    </div>
</div>
<h4 class="mt-4 text-muted">شبکه های اجتماعی</h4>
<div class="separator separator-dashed my-5"></div>
<div class="form-row">
    <div class="col-12 col-md-6">
        <x-admin.form.input wire:model="user.instagram" input-type="group" type="text" solid label="{{ __('model/user.instagram') }}">
            <x-slot name="prepend">
                <i class="fab fa-instagram"></i>
            </x-slot>
        </x-admin.form.input>
    </div>
    <div class="col-12 col-md-6">
        <x-admin.form.input wire:model="user.twitter" input-type="group" type="text" solid label="{{ __('model/user.twitter') }}">
            <x-slot name="prepend">
                <i class="fab fa-twitter"></i>
            </x-slot>
        </x-admin.form.input>
    </div>
</div>
<h4 class="mt-4 text-muted">امتیازات و کیف پول</h4>
<div class="separator separator-dashed my-5"></div>
<div class="form-row">
    <div class="col-12 col-md-6">
        <x-admin.form.input wire:model="user.wallet" input-type="group" type="text" dir="ltr" solid label="{{ __('model/user.wallet') }}">
            <x-slot name="prepend">
                <i class="fas fa-wallet"></i>
            </x-slot>
            <x-slot name="append">
                {{ \App\Services\Shop::currency() }}
            </x-slot>
        </x-admin.form.input>
    </div>
    <div class="col-12 col-md-6">
        <x-admin.form.input wire:model="user.point" input-type="group" type="text" solid label="{{ __('model/user.point') }}">
            <x-slot name="prepend">
                <i class="fas fa-star"></i>
            </x-slot>
            <x-slot name="append">
                امتیاز
            </x-slot>
        </x-admin.form.input>
    </div>
</div>
<h4 class="mt-4 text-muted">اطلاعات حساب بانکی کاربر</h4>
<div class="separator separator-dashed my-5"></div>
<div class="form-row">
    <div class="col-12 col-md-6">
        <x-admin.form.input wire:model="user.sheba" input-type="group" type="text" solid label="{{ __('model/user.sheba') }}">
            <x-slot name="prepend">
                <i class="fas la-university"></i>
            </x-slot>
        </x-admin.form.input>
    </div>
    <div class="col-12 col-md-6">
        <x-admin.form.input wire:model="user.card_number" input-type="group" type="text" solid label="{{ __('model/user.card_number') }}">
            <x-slot name="prepend">
                <i class="fas fa-credit-card"></i>
            </x-slot>
        </x-admin.form.input>
    </div>
</div>
