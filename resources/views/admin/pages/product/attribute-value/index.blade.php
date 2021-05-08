@extends('admin.layout.default')

@section('content')
    <x-admin.common.back-button route="admin.attribute.index" text="تمام ویژگی ها"/>
    <livewire:admin.product.attribute.attribute-value-list :attribute="$attribute"/>
    <x-admin.modal.simple size="md" id="attributeValueForm">
        <livewire:admin.product.attribute.attribute-value-form :attribute="$attribute" action="create"/>
    </x-admin.modal.simple>
@endsection

@section('scripts')
    <script>
      Livewire.on('attributeValueAdded', function () {
        $('#attributeValueForm').modal('hide');
      })
      Livewire.on('attributeValueUpdated', function () {
        $('#attributeValueForm').modal('hide');
      })
      Livewire.on('attributeValueSelected', function () {
        $('#attributeValueForm').modal('show');
      })
    </script>
    @parent
@endsection