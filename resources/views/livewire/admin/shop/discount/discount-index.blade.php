<div id="discount-page">
    <div class="row">
        <div class="col-5">
            <livewire:admin.shop.discount.form action="create"/>
        </div>
        <div class="col-7">
            <livewire:admin.shop.discount.discounts-list/>
        </div>
    </div>
</div>

@section('scripts')
    @parent
    <scripts>
        <script>
          function confirmDelete(event, discountId) {
            Swal.fire({
                        title: 'از پاک کردن این تخفیف مطمئن هستید؟',
                        text: "این کار غیر قابل بازگشت است!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'بله',
                        cancelButtonText: 'لغو'
                      }).then((result) => {
              if (result.isConfirmed) {
                Livewire.emit('deleteDiscount', discountId)
              }
            })
          }
        </script>
    </scripts>
@endsection