<div id="roles-list">
    <x-admin.card.simple title="لیست نقش های کاربری" icon="fas fa-user-tie">
        <x-slot name="body">
            <x-admin.table.table class="table-hover">
                <x-slot name="header">
                    <th scope="col" style="width: 80px;">#</th>
                    <th scope="col">نام نقش کاربری</th>
                    <th scope="col">عنوان نمایشی</th>
                    <th scope="col">توضیحات</th>
                    <th scope="col" class="text-center">@lang('common.actions')</th>
                </x-slot>
                <x-slot name="body">
                    @forelse($roles as $role)
                        <tr class="{{ $selectedRole === $role->id ? 'bg-light' : null}}">
                            <td class="align-middle">{{ $role->id }}</td>
                            <td class="align-middle"> {{ $role->name }}</td>
                            <td class="align-middle"> {{ $role->label }}</td>
                            <td class="align-middle"> {{ $role->description }}</td>
                            <td class="align-middle text-center">
                                <button wire:click="$emit('roleSelected', {{ $role }})" class="btn btn-sm btn-icon btn-light-primary">
                                    <i class="fas fa-pen"></i>
                                </button>
                                <button class="btn btn-sm btn-icon btn-light-danger deleteBtn" id="{{ $role->id }}" onclick="confirmDelete(event, {{$role->id}}, 'نقش کاربری', 'deleteRole')">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">
                                <h4 class="p-10 text-center">هیچ نقش کاربری یافت نشد</h4>
                            </td>
                        </tr>
                    @endforelse
                </x-slot>
                <x-slot name="footer"></x-slot>
            </x-admin.table.table>
        </x-slot>
    </x-admin.card.simple>
</div>

