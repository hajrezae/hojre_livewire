<x-admin.card.simple title="لیست دسته بندی های محصولات" icon="flaticon-gird">
    <x-slot name="toolbar">
        <button  class="btn btn-primary" data-toggle="modal" data-target="#categoryForm">
            <i class="fas fa-plus"></i>
            افزودن دسته بندی جدید
        </button>
    </x-slot>
    <x-slot name="body">
        <x-admin.table.table class="table-hover">
            <x-slot name="header">
                <tr>
                    <th scope="col" style="width: 30px">#</th>
                    <th scope="col">@lang('model/category.label')</th>
                    <th scope="col" class="d-flex justify-content-end">@lang('common.actions')</th>
                </tr>
            </x-slot>
            <x-slot name="body">
                @include('admin.pages.product.category.category-item', ['categories' => $categories])
            </x-slot>
            <x-slot name="footer">
            </x-slot>
        </x-admin.table.table>
    </x-slot>
</x-admin.card.simple>
