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

    </script>
@endsection
