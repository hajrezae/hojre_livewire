@extends('admin.layout.default')

@section('content')
    <livewire:admin.product.category.category-list/>
    <x-admin.modal.simple size="md" id="categoryForm">
        <livewire:admin.product.category.form action="create"/>
    </x-admin.modal.simple>
@endsection

@section('scripts')
    @parent
    <script>
      Livewire.on('categorySelected', function () {
        $('#categoryForm').modal('show');
      })

      Livewire.on('categoryAdded', function () {
        $('#categoryForm').modal('hide');
      })

      Livewire.on('categoryUpdated', function () {
        $('#categoryForm').modal('hide');
      })
    </script>
@endsection