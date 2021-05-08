<div id="coupons-list">
    <x-admin.card.simple title="لیست کوپن ها" icon="fas fa-money-bill">
        <x-slot name="body">
            <x-admin.table.table class="table-hover">
                <x-slot name="header">
                    <th>#</th>
                    <th>عنوان کوپن</th>
                    <th>نوع تخفیف</th>
                    <th>مقدار تخفیف</th>
                    <th class="text-center">عملیات</th>
                </x-slot>
                <x-slot name="body">
                    @forelse($coupons as $coupon)
                        <tr class="{{ $selectedCouponId == $coupon->id ? 'bg-light-primary' : null}}">
                            <td class="align-middle">{{ $coupon->id }}</td>
                            <td class="align-middle">{{ $coupon->label }}</td>
                            <td class="align-middle">{{ $coupon->typeLabel }}</td>
                            <td class="align-middle">{{ $coupon->amountText }}</td>
                            <td class="align-middle text-center">
                                <button wire:click="$emit('couponSelected', {{ $coupon->id }})" class="btn btn-sm btn-icon btn-light-primary">
                                    <i class="fas fa-pen"></i>
                                </button>
                                <button class="btn btn-sm btn-icon btn-light-danger deleteBtn" id="{{ $coupon->id }}" onclick="confirmDelete(event, {{$coupon->id}})">
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
