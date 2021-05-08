<div id="suppliers-list">
    <x-admin.card.simple title="لیست تامین کنندگان" icon="fas fa-user">
        <x-slot name="toolbar">
            <button class="btn btn-light-primary" data-toggle="modal" data-target="#supplierForm">
                <i class="fas fa-plus"></i>
                افزودن تامین کننده
            </button>
        </x-slot>
        <x-slot name="body">
            <x-admin.table.table class="table-hover">
                <x-slot name="header">
                    <tr>
                        <th scope="col" class="text-center" style="width: 50px">
                            <h3>#</h3>
                        </th>
                        <th scope="col" class="text-left" style="width: 300px">@lang('model/supplier.shop_name')</th>
                        <th scope="col" class="text-left">@lang('model/supplier.code')</th>
                        <th scope="col" class="text-left">وضعیت فعالیت</th>
                        <th scope="col" class="text-right">@lang('common.actions')</th>
                    </tr>
                </x-slot>
                <x-slot name="body">
                    @forelse($suppliers as $supplier)
                        <tr>
                            <td class="align-middle text-center">
                                <span>{{ $loop->iteration }}</span>
                            </td>
                            <td class="align-middle">
                                <div class="d-flex">
                                    <a href="#">
                                        <img src="{{ $supplier->logo_url != null ? asset($supplier->logo_url): asset('/media/users/default.jpg') }}" class="bg-light rounded-sm" width="50px" height="50px" alt="product-image">
                                    </a>
                                    <div class="d-flex flex-column ml-5 pt-2" style="width: 300px">
                                        <a href="#">
                                            <h5 class="font-weight-boldest">{{ $supplier->shop_name }}</h5>
                                        </a>
                                        <small class="text-muted font-weight-boldest">{{ $supplier->username }}</small>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">
                                <h5>{{ $supplier->code ?? 'فاقد کد فروشندگی' }}</h5>
                            </td>
                            <td class="align-middle">
                                @if($supplier->active)
                                    <span class="label label-inline label-light-success font-weight-bold">فعال</span>
                                @else
                                    <span class="label label-inline label-light-danger font-weight-bold">غیر فعال</span>
                                @endif
                            </td>
                            <td class="align-middle">
                                <span class="d-flex align-middle justify-content-end">
                                    <button wire:click="$emit('supplierSelected', {{ $supplier->id }})" type="button" class="btn btn-sm btn-light-primary btn-icon">
                                        <i class="fas fa-pen"></i>
                                    </button>
                                    <button wire:click="deleteSupplier({{ $supplier->id }})" type="button" class="btn btn-sm btn-light-danger btn-icon ml-3">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </span>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center p-20">
                                @lang('common.not_found', ['attribute' => 'محصولی'])
                            </td>
                        </tr>
                    @endforelse
                </x-slot>
                <x-slot name="footer">
                </x-slot>
            </x-admin.table.table>
            {{ $suppliers->links() }}
        </x-slot>
    </x-admin.card.simple>
</div>