<div class="user-info-wrapper">
    <x-admin.common.back-button route="admin.user.index" text="کاربران" />
    <form wire:submit.prevent="{{$action}}" enctype="multipart/form-data">
        @csrf
        <x-admin.card.simple title="{{ $action == 'create' ? 'ایجاد کاربر جدید' : 'ویرایش کاربر'}}" icon="flaticon-user-add icon-xl" footerClasses="justify-content-between">
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
</div>
