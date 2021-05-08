<div id="taxes-list">
    <x-admin.card.simple title="لیست مالیات ها" icon="fas fa-calculator">
        <x-slot name="body">
            <x-admin.table.table>
                <x-slot name="header">
                    <th>
                        #
                    </th>
                    <th>
                        عنوان کلاس مالیاتی
                    </th>
                    <th>
                        درصد
                    </th>
                    <th class="text-center">
                        عملیات
                    </th>
                </x-slot>
                <x-slot name="body">
                    @forelse($taxes as $tax)
                        <tr>
                            <td class="align-middle">{{ $tax->id }}</td>
                            <td class="align-middle">{{ $tax->label }}</td>
                            <td class="align-middle">{{ $tax->percent }} %</td>
                            <td class="align-middle text-center">
                                <button wire:click="$emit('taxSelected', {{ $tax }})" class="btn btn-sm btn-icon btn-light-primary">
                                    <i class="fas fa-pen"></i>
                                </button>
                                <button class="btn btn-sm btn-icon btn-light-danger" onclick="confirmDelete(event, {{ $tax->id }})">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4">
                                <h4 class="text-muted text-center p-10">
                                    هیچ کلاس مالیاتی وجود ندارد
                                </h4>
                            </td>
                        </tr>
                    @endforelse
                </x-slot>
                <x-slot name="footer">
                </x-slot>
            </x-admin.table.table>
        </x-slot>
    </x-admin.card.simple>
</div>
