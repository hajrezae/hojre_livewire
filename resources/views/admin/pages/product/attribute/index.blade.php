@extends('admin.layout.default')

@section('content')
    <livewire:admin.product.attribute.attribute-list/>
    <x-admin.modal.simple id="attributeForm">
        <livewire:admin.product.attribute.attribute-form action="create"/>
    </x-admin.modal.simple>
@endsection
@section('scripts')
    @parent
    <script>
      Livewire.on('attributeAdded', function () {
        $('#attributeForm').modal('hide');
      })

      Livewire.on('attributeUpdated', function () {
        $('#attributeForm').modal('hide');
      })
    </script>
@endsection