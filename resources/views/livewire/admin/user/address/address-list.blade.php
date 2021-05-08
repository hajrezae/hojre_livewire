<x-admin.card.simple title="آدرس های کاربر" icon="flaticon2-map">
    <x-slot name="body">
        <x-admin.table.table class="table-hover">
            <x-slot name="header">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">@lang('model/address.name')</th>
                    <th scope="col">@lang('model/address.city')</th>
                    <th scope="col">@lang('model/address.phone')</th>
                    <th scope="col">@lang('model/address.address')</th>
                    <th scope="col">@lang('model/address.note')</th>
                    <th scope="col">
                        <span class="d-flex justify-content-center">
                            @lang('common.actions')
                        </span>
                    </th>
                </tr>
            </x-slot>
            <x-slot name="body">
                @forelse($addresses as $address)
                    <tr class="{{ $selectedAddressId == $address->id ? 'bg-light-primary' : null }}">
                        <td scope="col">{{ $loop->iteration }}</td>
                        <td scope="col">{{ $address->name }}</td>
                        <td scope="col">{{ $address->city ?? 'شهری انتخاب نشده' }}</td>
                        <td scope="col">{{ $address->phone }}</td>
                        <td scope="col" style="width: 250px">{{ $address->address }}</td>
                        <td scope="col" style="width: 250px">{{ $address->note }}</td>
                        <td scope="col">
                            <span class="d-flex">
                                <button wire:click="$emit('addressSelected', {{$address->id}})" class="btn btn-sm btn-icon btn-light-primary mr-2"><i class="flaticon2-edit"></i></button>
                                <button wire:click="deleteAddress({{ $address->id }})" class="btn btn-sm btn-icon btn-light-danger mr-2"><i class="flaticon-delete-1"></i></button>
                            </span>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center p-20">
                            <h1>
                                @lang('common.not_found', ['attribute' => 'آدرسی'])
                            </h1>
                        </td>
                    </tr>
                @endforelse
            </x-slot>
            <x-slot name="footer">
            </x-slot>
        </x-admin.table.table>
    </x-slot>
</x-admin.card.simple>