@extends('admin.layout.default')

@section('content')
    <livewire:admin.user.form action="edit" :user="$user"/>
@endsection