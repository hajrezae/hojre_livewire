@section('styles')
    <style>
        .variation-swatch {
            border: 2px solid red;
            padding: 5px 15px;
            border-radius: 5px;
            position: relative;
            cursor:pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .variation-swatch input {
            opacity: 0;
            position: absolute;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }
    </style>
@endsection



<div id="suppliers-page">
    <livewire:admin.shop.supplier.supplier-list/>
    <x-admin.modal.simple id="supplierForm" size="xl">
        <livewire:admin.shop.supplier.form action="create"/>
    </x-admin.modal.simple>
</div>

@section('scripts')
    @parent
    <script>
      Livewire.on('supplierSelected', function () {
        $('#supplierForm').modal('show');
      })

      Livewire.on('supplierUpdated', function () {
        $('#supplierForm').modal('hide');
      })
    </script>
@endsection
