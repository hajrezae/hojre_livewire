<x-admin.card.simple title="لیست ویژگی ها" icon="flaticon-brush">
    <x-slot name="toolbar">
        <button class="btn btn-light-primary" data-toggle="modal" data-target="#attributeForm">
            <i class="fas fa-plus"></i>
            افزودن ویژگی
        </button>
    </x-slot>
    <x-slot name="body">
        <x-admin.table.table class="table-hover">
            <x-slot name="header">
                <tr>
                    <th scope="col" style="width: 30px">#</th>
                    <th scope="col">@lang('model/attribute.label')</th>
                    <th scope="col">
                        <span class="d-flex justify-content-end">
                            @lang('common.actions')
                        </span>
                    </th>
                </tr>
            </x-slot>
            <x-slot name="body">
                @forelse($attributes as $attribute)
                    <tr>
                        <td scope="col">{{ $attribute->id }}</td>
                        <td scope="col">{{ $attribute->label }}</td>
                        <td scope="col">
                            <span class="d-flex justify-content-end">
                                <a
                                        href="{{ route('admin.attribute.attributeValue.index', $attribute) }}"
                                        class="btn btn-sm btn-light-primary mr-4"
                                >
                                    مقادیر ویژگی
                                </a>
                                <button
                                        wire:click="$emit('attributeSelected', {{ $attribute->id }})"
                                        data-toggle="modal" data-target="#attributeForm"
                                        class="btn btn-sm btn-icon btn-light-primary mr-4"
                                >
                                    <i class="flaticon2-edit"></i>
                                </button>
                                <button
                                        wire:click="$emit('deleteAttribute', {{ $attribute->id }})"
                                        class="btn btn-sm btn-icon btn-light-danger"
                                >
                                    <i class="flaticon-delete-1"></i>
                                </button>
                            </span>
                        </td>
                    </tr>
                @empty
                    <tr scope="col">
                        <td
                                colspan="3" class="p-20 text-center"
                        >@lang('common.not_found', ['attribute' => 'ویژگی ای'])</td>
                    </tr>
                @endforelse
            </x-slot>
            <x-slot name="footer">
            </x-slot>
        </x-admin.table.table>
    </x-slot>
</x-admin.card.simple>