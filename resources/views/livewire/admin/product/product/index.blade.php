<x-admin.card.simple title="لیست محصولات" icon="fas fa-boxes">
    <x-slot name="cardBody">
        <x-slot name="toolbar">
            <a href="{{ route('admin.product.create') }}" class="btn btn-light-primary">
                <i class="fas fa-plus"></i>
                افزودن محصول جدید
            </a>
        </x-slot>
        {{--Search Bar--}}
        {{--Users Table--}}
        <x-slot name="body">
            <x-admin.table.table class="table-hover">
                <x-slot name="header">
                    <tr>
                        <th scope="col" class="text-center" style="width: 50px">
                            #
                        </th>
                        <th scope="col" class="text-left" style="width: 300px">@lang('model/product.name')</th>
                        <th scope="col" class="text-left">@lang('model/product.slug')</th>
                        <th scope="col" class="text-left">@lang('model/product.short_description')</th>
                        <th scope="col" class="text-left">@lang('model/product.price')</th>
                        <th scope="col" class="text-left">@lang('model/product.available')</th>
                        <th scope="col" class="text-left">@lang('common.actions')</th>
                    </tr>
                </x-slot>
                <x-slot name="body">
                    @forelse($products as $product)
                        <tr>
                            <td class="align-middle text-center">
                                <h3>{{ $product->id }}</h3>
                            </td>
                            <td class="align-middle">
                                <div class="d-flex">
                                    <a class="d-block" href="{{ route('admin.product.edit', $product) }}" width="100px">
                                        @if($product->image_url)
                                            <img
                                                    src="{{ $product->image_url ? asset( $product->image_url) : null}}"
                                                    class="bg-light rounded-sm" width="100px" height="100px"
                                                    alt="product-image"
                                            >
                                        @else
                                            <div
                                                    style="width: 100px;height: 100px"
                                                    class="bg-light d-flex align-items-center justify-content-center rounded-lg"
                                            >
                                                <i class="fas fa-image fa-3x"></i>
                                            </div>
                                        @endif
                                    </a>
                                    <div class="d-flex flex-column ml-5 pt-2" style="width: 300px">
                                        <a href="{{ route('admin.product.edit', $product) }}">
                                            <h5 class="font-weight-boldest">{{ $product->name }}</h5>
                                        </a>
                                        <small class="text-muted font-weight-boldest">{{ $product->slug ?? null }}</small>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle" style="width: 200px">
                                {{$product->slug}}
                            </td>
                            <td class="align-middle text-dark">
                                {{$product->short_description ?? 'بدون توضیح کوتاه'}}
                            </td>
                            <td class="align-middle">
                                @if($product->discount_price)
                                    <h6 class="text-success font-weight-boldest text-">
                                        <del>{{ $product->getRegularPrice() }}
                                            <small>تومان</small>
                                        </del>
                                    </h6>
                                    <h3 class="text-success font-weight-boldest text-danger">{{ $product->getDiscountPrice() }}
                                        <small>تومان</small>
                                    </h3>
                                @else
                                    <h3 class="text-success font-weight-boldest">
                                        {{ $product->getRegularPrice() }}
                                        <small>تومان</small>
                                    </h3>
                                @endif
                            </td>
                            <td class="align-middle">
                                @if($product->isAvailable() === true)
                                    <span class="label label-inline label-light-success font-weight-bold">موجود در انبار</span>
                                @elseif($product->isAvailable() === false)
                                    <span class="label label-inline label-light-danger font-weight-bold">ناموجود</span>
                                @elseif($product->isAvailable() === 2)
                                    <span class="label label-inline label-light font-weight-bold">عدم مدیریت موجودی</span>
                                @endif
                            </td>
                            <td class="align-middle">
                                <a
                                        href="{{ route('admin.product.edit', $product) }}"
                                        class="btn btn-light-primary btn-icon"
                                >
                                    <i class="fas fa-pen"></i>
                                </a>
                                <button
                                        onclick="confirmDelete(event, {{ $product->id }}, 'محصول', 'deleteProduct')"
                                        class="btn btn-light-danger btn-icon"
                                >
                                    <i class="fas fa-trash"></i>
                                </button>
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
        </x-slot>
        <x-slot name="footer">
            {{ $products->links() }}
        </x-slot>
    </x-slot>
</x-admin.card.simple>