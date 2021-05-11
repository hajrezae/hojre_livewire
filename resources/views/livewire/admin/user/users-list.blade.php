<x-admin.card.simple title="لیست کاربران" icon="fas fa-user">
    <x-slot name="toolbar">
        <a href='{{ route('admin.user.create') }}' class="btn btn-primary ml-4 font-weight-boldest">
            <i class="flaticon-plus"></i>
            افزودن کاربر جدید
        </a>
    </x-slot>
    <x-slot name="body">
        <div class="search-box-wrapper my-5">
            <x-admin.common.search-box wire:model="search" placeholder="جستجو بین کاربران بر اساس نام کاربری و ..."/>
        </div>
        <x-admin.table.table class="table-hover">
            <x-slot name="header">
                <tr>
                    <th scope="col" style="width: 60px">#</th>
                    <th scope="col">@lang('model/user.username')</th>
                    <th scope="col">@lang('model/user.phone')</th>
                    <th scope="col" style="width: 200px">@lang('model/user.email')</th>
                    <th scope="col" style="width: 200px">@lang('model/user.first_name')</th>
                    <th scope="col">@lang('model/user.wallet')</th>
                    <th scope="col">@lang('model/user.point')</th>
                    <th scope="col">@lang('common.actions')</th>
                </tr>
            </x-slot>
            <x-slot name="body">
                @forelse($users as $user)
                    <tr>
                        <td scope="col" class="align-middle">{{ $user->id }}</td>
                        <td scope="col" class="align-middle">
                            <div class="d-flex justify-content-start align-items-center">
                                <img src="{{ $user->avatar_url != null ? asset($user->avatar_url) : asset('media/users/default.jpg') }}" class="rounded-lg" width="50px" height="50px" alt="user avatar">
                                <div class="d-flex flex-column ml-5">
                                    <span class="username">{{ $user->username }}</span>
                                    <small class="text-muted name">{{ $user->first_name }}</small>
                                </div>
                            </div>
                        </td>
                        <td scope="col" class="align-middle">{{ $user->phone }}</td>
                        <td scope="col" class="align-middle text-muted font-weight-boldest">{{ $user->email }}</td>
                        <td scope="col" class="align-middle">{{ $user->first_name }}</td>
                        <td scope="col" class="align-middle">{{ number_format($user->wallet) }} <span class="currency text-success font-weight-boldest">{{ \App\Services\Shop::currency()  }}</span></td>
                        <td scope="col" class="align-middle">{{ $user->point }}</td>
                        <td scope="col" class="align-middle">
                            <span class="d-flex">
                                <a href="{{ route('admin.user.edit', $user) }}" class="btn btn-sm btn-icon btn-light-primary mr-2"><i class="flaticon2-edit"></i></a>
                                <a href="{{ route('admin.user.address.index', $user) }}" class="btn btn-sm btn-icon btn-light-primary mr-2"><i class="flaticon2-location"></i></a>
                                <a class="btn btn-sm btn-icon btn-light-danger mr-2"><i class="flaticon-delete-1" onclick="confirmDelete(event, {{ $user->id }}, 'کاربر', 'deleteUser')"></i></a>
                            </span>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center p-20">
                            <h1>
                                کاربری پیدا نشد
                            </h1>
                        </td>
                    </tr>
                @endforelse
            </x-slot>
            <x-slot name="footer">
                <th colspan="8">{{ $users->links() }}</th>
            </x-slot>
        </x-admin.table.table>
    </x-slot>
</x-admin.card.simple>

