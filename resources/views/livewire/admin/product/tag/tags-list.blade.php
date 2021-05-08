<div class="row justify-content-center">
    <div class="col-8">
        <div id="tagsList">
            <x-admin.card.simple title="لیست تگ ها" icon="fas fa-tag">
                <x-slot name="toolbar" >
                    <button class="btn btn-light-primary" data-toggle="modal" data-target="#tagForm">
                        <i class="fas fa-plus"></i>
                        افزودن تگ جدید
                    </button>
                </x-slot>
                <x-slot name="body">
                    <x-admin.table.table class="table-hover">
                        <x-slot name="header">
                            <tr>
                                <th scope="col" style="width: 30px">#</th>
                                <th scope="col">@lang('model/tag.label')</th>
                                <th scope="col" class="d-flex justify-content-end">@lang('common.actions')</th>
                            </tr>
                        </x-slot>
                        <x-slot name="body">
                            @forelse($tags as $tag)
                                <tr>
                                    <td scope="col">{{ $tag->id }}</td>
                                    <td scope="col">{{ $tag->label }}</td>
                                    <td scope="col">
                                        <span class="d-flex justify-content-end">
                                            <button wire:click="$emit('tagSelected', {{ $tag->id }})"  data-toggle="modal" data-target="#attributeForm" class="btn btn-sm btn-icon btn-light-primary mr-4">
                                                <i class="flaticon2-edit"></i>
                                            </button>
                                            <button wire:click="deleteTag({{ $tag->id }})" class="btn btn-sm btn-icon btn-light-danger">
                                                <i class="flaticon-delete-1"></i>
                                            </button>
                                        </span>
                                    </td>
                                </tr>
                            @empty
                                <tr scope="col">
                                    <td colspan="3" class="p-20 text-center">@lang('common.not_found', ['attribute' => 'تگی'])</td>
                                </tr>
                            @endforelse
                        </x-slot>
                        <x-slot name="footer">
                        </x-slot>
                    </x-admin.table.table>
                </x-slot>
            </x-admin.card.simple>
        </div>
    </div>
</div>
