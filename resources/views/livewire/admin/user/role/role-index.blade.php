<div id="roles-page">
    <div class="row">
        <div class="col-4">
            <livewire:admin.user.role.form action="create"/>
        </div>
        <div class="col-8">
            <livewire:admin.user.role.roles-list/>
        </div>
    </div>
</div>

@section('scripts')
    @parent
    <script>
      function confirmDelete(event, roleId) {
        Swal.fire({
                    title: 'از پاک کردن این نقش کاربری مطمئن هستید؟',
                    text: "این کار غیر قابل بازگشت است!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'بله',
                    cancelButtonText: 'لغو'
                  }).then((result) => {
          if (result.isConfirmed) {
            Livewire.emit('deleteRole', roleId)
          }
        })
      }
    </script>
@endsection
