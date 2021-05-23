@extends('admin.layout.default')

@section('content')
    <div class="row justify-content-center">
        <div class="col-9">
            <livewire:admin.user.form action="edit" :user="$user"/>
        </div>
    </div>
@endsection