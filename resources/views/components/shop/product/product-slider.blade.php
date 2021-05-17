@props(['products', 'title'])
<div class="title-wrap text-center">
    <h2 class="h-lg-style">{{ $title }}</h2>
</div>
<div class="prd-grid-wrap position-relative">
    <div
            class="prd-grid data-to-show-5 data-to-show-lg-4 data-to-show-md-3 data-to-show-sm-2 data-to-show-xs-2 js-category-grid"
    >
        @foreach($products as $product)
            <div class="prd prd--style2 prd-labels--max prd-labels-shadow ">
                <div class="prd-inside">
                    <div class="prd-img-area">
                        <a
                                href="{{ route('shop.product', $product) }}"
                                class="prd-img image-hover-scale image-container"
                        >
                            <img
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="{{ $product->image_url }}" alt="کتاب 23"
                                    class="js-prd-img lazyload fade-up"
                            >
                            <div class="foxic-loader"></div>
                            <div class="prd-big-squared-labels">
                                <div class="label-new">
                                    <span>جدید</span>
                                </div>
                                @if($product->discount_price)
                                    <div class="label-new bg-danger">
                                        <span>{{ $product->discountPercent() }}</span>
                                    </div>
                                @endif
                            </div>
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
                                    href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile"
                                    data-src="ajax/ajax-quickview.html"
                            >
                                <i class="icon-eye"></i>
                                <span>مشاهده
												سریع</span>
                            </a>
                        </div>
                    </div>
                    <div class="prd-info">
                        <div class="prd-info-wrap">
                            <div class="prd-info-top">
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
                                    <i class="icon-star-fill fill"></i>
                                </div>
                            </div>
                            <div class="prd-rating justify-content-center">
                                <i
                                        class="icon-star-fill fill"
                                ></i>
                                <i class="icon-star-fill fill"></i>
                                <i
                                        class="icon-star-fill fill"
                                ></i>
                                <i class="icon-star-fill fill"></i>
                                <i
                                        class="icon-star-fill fill"
                                ></i>
                            </div>
                            <div class="prd-tag">
                                <a href="#">{{ env('APP_NAME') }}</a>
                            </div>
                            <h2 class="prd-title" style="min-height: 60px">
                                <a href="{{ route('shop.product', $product) }}">{{ $product->name ?? '-' }}</a>
                            </h2>
                            <div class="prd-description">
                                {{ $product->short_description }}
                            </div>
                            <div class="prd-action">
                                <form action="#">
                                    <button
                                            class="btn js-prd-addtocart"
                                            data-product='{"name": "{{ $product->name }}", "path":"images/skins/books/products/product-23.webp", "url":"product.html", "aspect_ratio":0.778}'
                                    >افزودن
                                     به سبد خرید
                                    </button>
                                </form>
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
                                <div class="prd-hide-mobile">
                                    <a
                                            href="#"
                                            class="circle-label-qview js-prd-quickview"
                                            data-src="ajax/ajax-quickview.html"
                                    >
                                        <i
                                                class="icon-eye"
                                        ></i>
                                        <span>مشاهده سریع</span>
                                    </a>
                                </div>
                            </div>
                            <div class="prd-price">
                                @if($product->discount_price)
                                    <div class="price-old text-danger">{{ $product->getRegularPrice() }} تومان</div>
                                    <div class="price-new text-success">{{ $product->getDiscountPrice() }} تومان</div>

                                @else
                                    @if($product->price == null || $product->price == 0)
                                        <div class="price-new text-success">رایگان</div>
                                    @else
                                        <div class="price-new">{{ $product->getRegularPrice() }} تومان</div>
                                    @endif
                                @endif

                            </div>
                            <div class="prd-action">
                                <div class="prd-action-left">
                                    <form action="#">
                                        <button
                                                class="btn js-prd-addtocart"
                                                data-product='{"name": "{{ $product->name }}", "path":"{{ $product->image_url }}p", "url":"product.html", "aspect_ratio":0.778}'
                                        >افزودن
                                         به سبد خرید
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
