<x-admin.card.simple title="مقادیر ویژگی : ( {{ $attribute->label }} )">
    <x-slot name="toolbar">
        <button class="btn btn-light-primary" data-toggle="modal" data-target="#attributeValueForm">
            <i class="fas fa-plus"></i>
            افزودن مقدار ویژگی
        </button>
    </x-slot>
    <x-slot name="body">
        <x-admin.table.table class="table-hover">
            <x-slot name="header">
                <tr>
                    <th scope="col" style="width: 30px">#</th>
                    <th scope="col">عنوان مقدار ویژگی</th>
                    <th scope="col" class="d-flex justify-content-end">@lang('common.actions')</th>
                </tr>
            </x-slot>
            <x-slot name="body">
                @forelse($attributeValues as $attributeValue)
                    <tr>
                        <td scope="col">{{ $attributeValue->id }}</td>
                        <td scope="col">{{ $attributeValue->label }}</td>
                        <td scope="col">
                            <span class="d-flex justify-content-end">
                                <button wire:click="$emit('attributeValueSelected', {{ $attributeValue->id }})" class="btn btn-sm btn-icon btn-light-primary">
                                    <i class="flaticon2-edit"></i>
                                </button>
                                <button wire:click="deleteAttributeValue({{ $attributeValue->id }})" class="btn btn-sm btn-icon btn-light-danger ml-3">
                                    <i class="flaticon-delete-1"></i>
                                </button>
                            </span>
                        </td>
                    </tr>
                @empty
                    <tr scope="col">
                        <td colspan="3" class="p-20 text-center">@lang('common.not_found', ['attribute' => 'مقدار ویژگی ای'])</td>
                    </tr>
                @endforelse
            </x-slot>
            <x-slot name="footer">
            </x-slot>
        </x-admin.table.table>
    </x-slot>
</x-admin.card.simple>