@extends('admin.layout.default')

@section('content')
    <livewire:admin.product.tag.tags-list/>
    <x-admin.modal.simple id="tagForm" size="md">
        <livewire:admin.product.tag.form action="create"/>
    </x-admin.modal.simple>
@endsection

@section('scripts')
    <script>
        Livewire.on('tagCreated', function() {
          $('#tagForm').modal('hide');
        })

        Livewire.on('tagUpdated', function() {
          $('#tagForm').modal('hide');
        })

        Livewire.on('tagSelected', function() {
          $('#tagForm').modal('show');
        })
    </script>
    @endsection