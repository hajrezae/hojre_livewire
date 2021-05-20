<div id="login-page">
    <x-admin.card.simple title="ورود ادمین" icon="fas fa-user" class="rounded-lg">
        <x-slot name="body">
            <div class="login">
                <form wire:submit.prevent="login">
                    <div class="form-row">
                        <div class="col-12">
                            <x-admin.form.input
                                    wire:model="phone" input-type="group" class="text-center form-group-lg" solid
                                    label="شماره تماس" placeholder="شماره تماس و یا نام کاربری "
                            >
                                <x-slot name="prepend">
                                    <i class="fas fa-phone"></i>
                                </x-slot>
                            </x-admin.form.input>
                        </div>
                        <div class="col-12">
                            <x-admin.form.input
                                    wire:model="password" type="password" input-type="group" class="text-center" solid
                                    label="رمز عبور" dir="ltr"
                                    placeholder="رمز عبور خود را وارد کنید"
                            >
                                <x-slot name="prepend">
                                    <i class="fas fa-lock"></i>
                                </x-slot>
                            </x-admin.form.input>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-block btn-light-success font-weight-bold px-9 py-4 my-3">ورود
                    </button>
                </form>
            </div>
        </x-slot>
    </x-admin.card.simple>
</div>
@section('scripts')
    @parent
    <script>
        window.addEventListener('login_failed', function (e) {
            Swal.fire({
                position: 'center',
                showConfirmButton: true,
                timer: 3000,
                timerProgressBar: true,
                title: e.detail.message,
                icon: 'error',
                confirmButtonText: 'باشه'
            })
        });
    </script>
@endsection