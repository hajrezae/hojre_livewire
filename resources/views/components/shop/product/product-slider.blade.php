@props(['products'])
<div class="title-wrap text-center">
    <h2 class="h1-style">محصولات ویژه</h2>
    <div class="carousel-arrows"></div>
</div>
<div
        class="prd-grid prd-carousel js-prd-carousel data-to-show-4 data-to-show-md-2 data-to-show-sm-2 data-to-show-xs-2 js-product-grid-sm"
>
    @foreach($products as $product)
        <div class="prd ">
            <div class="prd-inside">
                <div class="prd-img-area">
                    <a
                            href="{{ $product->product_url }}" class="prd-img image-hover-scale image-container"
                            style="padding-bottom: 128.48%"
                    >
                        <img
                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                data-src="{{ $product->image_url }}" alt="Legging Red/Black"
                                class="js-prd-img lazyload"
                        >
                        <div class="foxic-loader"></div>
                        @if($product->discount_price != null)
                            <div class="prd-big-circle-labels">
                                <div class="label-sale">
                                    <span class="font-weight-boldest">{{ $product->discountPercent() }} %</span>
                                </div>
                            </div>
                        @endif
                    </a>
                    <div class="prd-circle-labels">
                        <a
                                href="#"
                                class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0"
                                title="افزودن به لیست علاقه مندی"
                        >
                            <i class="icon-heart-stroke"></i>
                        </a>
                        <a
                                href="#"
                                class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0"
                                title="حذف از لیست علاقه مندی"
                        >
                            <i class="icon-heart-hover"></i>
                        </a>
                        <a
                                href="#" class="circle-label-qview js-prd-quickview"
                                data-src="ajax/ajax-quickview.html"
                        >
                            <i class="icon-eye"></i>
                            <span>مشاهده
											سریع</span>
                        </a>
                        <div class="colorswatch-label colorswatch-label--variants js-prd-colorswatch">
                            <i class="icon-palette">
                                <span class="path1"></span>
                                <span
                                        class="path2"
                                ></span>
                                <span class="path3"></span>
                                <span
                                        class="path4"
                                ></span>
                                <span class="path5"></span>
                                <span
                                        class="path6"
                                ></span>
                                <span class="path7"></span>
                                <span
                                        class="path8"
                                ></span>
                                <span class="path9"></span>
                                <span
                                        class="path10"
                                ></span>
                            </i>
                            @if($product->attributes()->firstWhere('name', 'color'))
                                <ul>
                                    @foreach($product->attributeValues as $attributeValue)
                                        <li>
                                            <a
                                                    style="background-color: {{ $attributeValue->color }}"
                                                    class="js-color-toggle" data-toggle="tooltip" data-placement="right"
                                                    title="{{ $attributeValue->label }}"
                                            >
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>
                    {{--                    <ul class="list-options color-swatch">--}}
                    {{--                        <li data-image="/shop/images/products/product-01.webp" class="active">--}}
                    {{--                            <a--}}
                    {{--                                    href="#"--}}
                    {{--                                    class="js-color-toggle" data-toggle="tooltip" data-placement="left"--}}
                    {{--                                    title="نام رنگ"--}}
                    {{--                            >--}}
                    {{--                                <img--}}
                    {{--                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="--}}
                    {{--                                        data-src="/shop/images/products/product-01.webp"--}}
                    {{--                                        class="lazyload fade-up"--}}
                    {{--                                        alt="Color Name"--}}
                    {{--                                >--}}
                    {{--                            </a>--}}
                    {{--                        </li>--}}
                    {{--                        <li data-image="/shop/images/products/product-01-1.webp">--}}
                    {{--                            <a--}}
                    {{--                                    href="#"--}}
                    {{--                                    class="js-color-toggle" data-toggle="tooltip" data-placement="left"--}}
                    {{--                                    title="نام رنگ"--}}
                    {{--                            >--}}
                    {{--                                <img--}}
                    {{--                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="--}}
                    {{--                                        data-src="/shop/images/products/product-01-1.webp"--}}
                    {{--                                        class="lazyload fade-up"--}}
                    {{--                                        alt="Color Name"--}}
                    {{--                                >--}}
                    {{--                            </a>--}}
                    {{--                        </li>--}}
                    {{--                        <li data-image="/shop/images/products/product-01-2.webp">--}}
                    {{--                            <a--}}
                    {{--                                    href="#"--}}
                    {{--                                    class="js-color-toggle" data-toggle="tooltip" data-placement="left"--}}
                    {{--                                    title="نام رنگ"--}}
                    {{--                            >--}}
                    {{--                                <img--}}
                    {{--                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="--}}
                    {{--                                        data-src="/shop/images/products/product-01-2.webp"--}}
                    {{--                                        class="lazyload fade-up"--}}
                    {{--                                        alt="Color Name"--}}
                    {{--                                >--}}
                    {{--                            </a>--}}
                    {{--                        </li>--}}
                    {{--                        <li data-image="/shop/images/products/product-01-3.webp">--}}
                    {{--                            <a--}}
                    {{--                                    href="#"--}}
                    {{--                                    class="js-color-toggle" data-toggle="tooltip" data-placement="left"--}}
                    {{--                                    title="نام رنگ"--}}
                    {{--                            >--}}
                    {{--                                <img--}}
                    {{--                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="--}}
                    {{--                                        data-src="/shop/images/products/product-01-3.webp"--}}
                    {{--                                        class="lazyload fade-up"--}}
                    {{--                                        alt="Color Name"--}}
                    {{--                                >--}}
                    {{--                            </a>--}}
                    {{--                        </li>--}}
                    {{--                    </ul>--}}
                </div>
                <div class="prd-info">
                    <div class="prd-info-wrap">
                        <div class="prd-info-top">
                            <div class="prd-rating">
                                <i class="icon-star-fill fill"></i>
                                <i
                                        class="icon-star-fill fill"
                                ></i>
                                <i class="icon-star-fill fill"></i>
                                <i
                                        class="icon-star-fill fill"
                                ></i>
                                <i class="icon-star-fill fill"></i>
                            </div>
                            <div class="prd-tag">
                                <a href="#">هجره</a>
                            </div>
                        </div>
                        <h2 class="prd-title">
                            <a href="product.html">{{ $product->name ?? "-" }}
                            </a>
                        </h2>
                        <div class="prd-description">
                            {{ $product->short_description }}
                        </div>
                    </div>
                    <div class="prd-hovers">
                        <div class="prd-circle-labels">
                            <div>
                                <a
                                        href="#"
                                        class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0"
                                        title="افزودن به لیست علاقه مندی"
                                >
                                    <i
                                            class="icon-heart-stroke"
                                    ></i>
                                </a>
                                <a
                                        href="#"
                                        class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0"
                                        title="حذف از لیست علاقه مندی"
                                >
                                    <i class="icon-heart-hover"></i>
                                </a>
                            </div>
                            <div>
                                <a
                                        href="#" class="circle-label-qview prd-hide-mobile js-prd-quickview"
                                        data-src="ajax/ajax-quickview.html"
                                >
                                    <i class="icon-eye"></i>
                                    <span>مشاهده
													سریع</span>
                                </a>
                            </div>
                        </div>
                        <div class="prd-price">
                            <div class="price-old">{{ $product->getRegularPrice() }} تومان</div>
                            <div class="price-new text-danger">{{ $product->getDiscountPrice() }} تومان</div>
                        </div>
                        <div class="prd-action">
                            <div class="prd-action-left">
                                <form action="#">
                                    <button
                                            class="btn js-prd-addtocart"
                                            data-product='{"name": "ساق بلند قرمز / مشکی", "path":"/shop/images/products/product-01.webp", "url":"product.html", "aspect_ratio":0.778}'
                                    >افزودن
                                     به سبد خرید
                                    </button>
                                </form>
                            </div>
                            <div class="prd-action-right">
                                <div class="prd-action-right-inside">
                                    <div class="prd-tag">
                                        <a href="#">هجره</a>
                                    </div>
                                    <div class="prd-rating">
                                        <i class="icon-star-fill fill"></i>
                                        <i
                                                class="icon-star-fill fill"
                                        ></i>
                                        <i
                                                class="icon-star-fill fill"
                                        ></i>
                                        <i
                                                class="icon-star-fill fill"
                                        ></i>
                                        <i
                                                class="icon-star-fill fill"
                                        ></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>