<div id="login-page">
    <div class="login-signin">
        <form wire:submit.prevent="login" >
            <div class="form-row">
                <div class="col-12">
                    <x-admin.form.input wire:model="phone" input-type="group" solid label="شماره تماس" dir="ltr">
                        <x-slot name="prepend">
                            <i class="fas fa-phone"></i>
                        </x-slot>
                        <x-slot name="caption">
                            برای ورود شماره تلفن خو را به همراه پیش شماره وارد کنید
                        </x-slot>
                    </x-admin.form.input>
                </div>
                <div class="col-12">
                    <x-admin.form.input wire:model="password" input-type="group" solid label="رمز عبور" dir="ltr">
                        <x-slot name="prepend">
                            <i class="fas fa-lock"></i>
                        </x-slot>
                        <x-slot name="caption">
                            رمز عبور
                        </x-slot>
                    </x-admin.form.input>
                </div>
            </div>
            <button type="submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4">ورود</button>
        </form>
    </div>
</div>