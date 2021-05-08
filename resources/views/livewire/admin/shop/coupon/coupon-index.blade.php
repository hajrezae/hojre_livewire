<div id="coupon-page">
    <div class="row">
        <div class="col-4">
            <livewire:admin.shop.coupon.form action="create"/>
        </div>
        <div class="col-8">
            <livewire:admin.shop.coupon.coupons-list />
        </div>
    </div>
</div>
@section('scripts')
    @parent
    <scripts>
        <script>
          function confirmDelete(event, discountId) {
            Swal.fire({
                        title: 'از پاک کردن این کوپن مطمئن هستید؟',
                        text: "این کار غیر قابل بازگشت است!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'بله',
                        cancelButtonText: 'لغو'
                      }).then((result) => {
              if (result.isConfirmed) {
                Livewire.emit('deleteCoupon', discountId)
              }
            })
          }
        </script>
    </scripts>
@endsection