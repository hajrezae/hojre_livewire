<div id="tax-page">
    <div class="row">
        <div class="col-4">
            <livewire:admin.shop.tax.form action="create"/>
        </div>
        <div class="col-8">
            <livewire:admin.shop.tax.taxes-list />
        </div>
    </div>
</div>
@section('scripts')
    @parent
    <scripts>
        <script>
          function confirmDelete(event, taxId) {
            Swal.fire({
                        title: 'از پاک کردن این کلاس مالیاتی مطمئن هستید؟',
                        text: "این کار غیر قابل بازگشت است!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'بله',
                        cancelButtonText: 'لغو'
                      }).then((result) => {
              if (result.isConfirmed) {
                Livewire.emit('deleteTax', taxId)
              }
            })
          }
        </script>
    </scripts>
@endsection
