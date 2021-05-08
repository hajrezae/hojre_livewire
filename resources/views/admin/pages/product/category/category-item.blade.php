@forelse($categories as $category)
    @if($category->childs()->isNotEmpty())
        <tr>
            <td scope="col">{{ $category->id }}</td>
            <td scope="col">{{ str_repeat("- ", $loop->depth) }}{{ $category->label }}</td>
            <td scope="col">
                <span class="d-flex justify-content-end">
                    <button wire:click="$emit('categorySelected', {{ $category->id }})" class="btn btn-sm btn-icon btn-light-primary mr-2"><i class="flaticon2-edit"></i></button>
                    <button wire:click="$emit('deleteCategory', {{ $category->id }})" class="btn btn-sm btn-icon btn-light-danger mr-2"><i class="flaticon-delete-1"></i></button>

                </span>
            </td>
        </tr>
        @include('admin.pages.product.category.category-item', ['categories' => $category->childs()])
    @else
        <tr>
            <td scope="col">{{ $category->id }}</td>
            <td scope="col">{{ str_repeat("- ", $loop->depth) }}{{ $category->label }}</td>
            <td scope="col">
                <span class="d-flex justify-content-end">
                    <button wire:click="$emit('categorySelected', {{ $category->id }})" class="btn btn-sm btn-icon btn-light-primary mr-2"><i class="flaticon2-edit"></i></button>
                    <button wire:click="$emit('deleteCategory', {{ $category->id }})" class="btn btn-sm btn-icon btn-light-danger mr-2"><i class="flaticon-delete-1"></i></button>
                </span>
            </td>
        </tr>
    @endif

@empty
    <tr>
        <td colspan="8" class="text-center p-20">
            <h1>
                @lang('common.not_found', ['attribute' => 'دسته بندی ای'])
            </h1>
        </td>
    </tr>
@endforelse