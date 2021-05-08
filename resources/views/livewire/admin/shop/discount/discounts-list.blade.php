<div id="discounts-list">
    <x-admin.card.simple title="لیست تخفیف ها" icon="fas fa-percent">
        <x-slot name="body">
            <x-admin.table.table class="table-hover">
                <x-slot name="header">
                    <th scope="col">#</th>
                    <th scope="col">اسم تخفیف</th>
                    <th scope="col">عنوان تخفیف</th>
                    <th scope="col">اعمال بر روی</th>
                    <th scope="col" class="text-center">عملیات</th>
                </x-slot>
                <x-slot name="body">
                    @forelse($discounts as $discount)
                        <tr class="{{ $selectedDiscountId == $discount->id ? 'bg-light-primary' : null }}">
                            <td class="align-middle">{{ $discount->id }}</td>
                            <td class="align-middle">{{ $discount->name }}</td>
                            <td class="align-middle">{{ $discount->label }}</td>
                            <td class="align-middle">{{ $discount->appliedToLabel() }}</td>
                            <td class="align-middle text-center">
                                <button wire:click="$emit('discountSelected', {{ $discount->id }})" class="btn btn-sm btn-icon btn-light-primary">
                                    <i class="fas fa-pen"></i>
                                </button>
                                <button class="btn btn-sm btn-icon btn-light-danger deleteBtn" id="{{ $discount->id }}" onclick="confirmDelete(event, {{$discount->id}})">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">
                                <h4 class="text-muted text-center p-10">هیچ تخفیفی پیدا نشد</h4>
                            </td>
                        </tr>
                    @endforelse
                </x-slot>
                <x-slot name="footer"></x-slot>
            </x-admin.table.table>
        </x-slot>
    </x-admin.card.simple>
</div>
