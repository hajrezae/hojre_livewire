@if(session('action_success'))
    <x-admin.notification.notification type="success" icon="flaticon2-checkmark">
        {{ session('action_success') }}
    </x-admin.notification.notification>
@endif