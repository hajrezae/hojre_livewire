@extends('admin.layout.default')

@section('content')
    <x-admin.common.back-button route="admin.user.index" text="کاربران" />
    <div class="row">
        <div class="col-4">
            <livewire:admin.user.address.form :user="$user" action="create"/>
        </div>
        <div class="col-8">
            <livewire:admin.user.address.address-list :user="$user"/>
        </div>
    </div>
@endsection