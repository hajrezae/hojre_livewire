@extends('admin.layout.default')

@section('content')
    <div class="row">
        <div class="col-12 p-10 bg-white">
            <x-admin.form.switch checked=0 withIcon=true outline color="danger" />
        </div>
    </div>
@endsection
