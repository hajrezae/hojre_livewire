<div class="user-info-wrapper">
    <x-admin.common.back-button route="admin.user.index" text="کاربران" />
    <form wire:submit.prevent="{{$action}}" enctype="multipart/form-data">
        @csrf
        <x-admin.card.simple title="{{ $action == 'create' ? 'ایجاد کاربر جدید' : 'ویرایش کاربر'}}" icon="flaticon-user-add icon-xl" footerClasses="justify-content-between">
            <x-slot name="toolbar">
                <a href="{{ route('admin.user.address.index', $user) }}" class="btn btn-light-success">
                    <i class="fas fa-address-book"></i>
                    آدرس های کاربر
                </a>
                <button type="button" class="btn btn-light-primary ml-3" data-toggle="modal" data-target="#user-roles">
                    <i class="fas fa-user-lock"></i>
                    نقش های کاربر
                </button>
            </x-slot>
            <x-slot name="body">
                @include('admin.pages.user.profile')
            </x-slot>
            <x-slot name="footer">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i>
                    ذخیره کاربر
                </button>
                <a href="{{ route('admin.user.index') }}" class="btn btn-danger">
                    <i class="flaticon-close font-weight-boldest"></i>
                    لغو و بازگشت به لیست کاربران
                </a>
            </x-slot>
        </x-admin.card.simple>
    </form>
    <x-admin.modal.simple id="user-roles" >

        <div class="modal-header">
            <h5 class="modal-title">
                dalsdh
            </h5>
        </div>
        <div class="modal-content">
            alksdh
        </div>
    </x-admin.modal.simple>
</div>
