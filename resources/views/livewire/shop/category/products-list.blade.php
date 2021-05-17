<div class="col-lg aside">
    <div class="prd-grid-wrap">
        <div
                class="prd-grid product-listing data-to-show-3 data-to-show-md-3 data-to-show-sm-2 js-category-grid"
                data-grid-tab-content=""
        >
            @foreach($categoryProducts as $product)
                <div class="prd prd--style2 prd-labels--max prd-labels-shadow prd-w-lg" style="">
                    <div class="prd-inside">
                        <div class="prd-img-area">
                            <a
                                    href="{{ route('shop.product', $product) }}"
                                    class="prd-img image-hover-scale image-container" style="padding-bottom: 128.48%"
                            >
                                <img
                                        src="{{ asset($product->image_url) }}"
                                        data-src="{{ asset($product->image_url) }}" alt="شلوار چرمی"
                                        class="js-prd-img fade-up ls-is-cached lazyloaded"
                                >
                                <div class="foxic-loader"></div>
                                <div class="prd-big-squared-labels">
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
                                <div class="colorswatch-label colorswatch-label--variants js-prd-colorswatch">
                                    <i class="icon-palette">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                        <span class="path6"></span>
                                        <span class="path7"></span>
                                        <span class="path8"></span>
                                        <span class="path9"></span>
                                        <span class="path10"></span>
                                    </i>
                                    <ul>
                                        <li data-image="/shop/images/skins/fashion/products/product-01-1.webp">
                                            <a
                                                    class="js-color-toggle" data-toggle="tooltip" data-placement="right"
                                                    title="" data-original-title="نام رنگ"
                                            >
                                                <img src="/shop/images/colorswatch/color-orange.webp" alt="">
                                            </a>
                                        </li>
                                        <li data-image="/shop/images/skins/fashion/products/product-01-color-2.webp">
                                            <a
                                                    class="js-color-toggle" data-toggle="tooltip" data-placement="right"
                                                    title="" data-original-title="نام رنگ"
                                            >
                                                <img src="/shop/images/colorswatch/color-black.webp" alt="">
                                            </a>
                                        </li>
                                        <li data-image="/shop/images/skins/fashion/products/product-01-color-3.webp">
                                            <a
                                                    class="js-color-toggle" data-toggle="tooltip" data-placement="right"
                                                    title="" data-original-title="نام رنگ"
                                            >
                                                <img src="/shop/images/colorswatch/color-red.webp" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            @if($product->image_gallery)
                                <ul class="list-options color-swatch">
                                    @foreach(unserialize($product->image_gallery) as $image)
                                        <li
                                                data-image="{{ asset($image) }}"
                                        >
                                            <a
                                                    href="{{ asset($image) }}" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left"
                                                    title=""
                                            >
                                                <img
                                                        src="{{ asset($image) }}"
                                                        data-src="{{asset($image)}}"
                                                        class="fade-up ls-is-cached lazyloaded" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>

                            @endif
                        </div>
                        <div class="prd-info">
                            <div class="prd-info-wrap">
                                <div class="prd-info-top">
                                    <div class="prd-rating">
                                        <i class="icon-star-fill fill"></i>
                                        <i class="icon-star-fill fill"></i>
                                        <i class="icon-star-fill fill"></i>
                                        <i class="icon-star-fill fill"></i>
                                        <i class="icon-star-fill fill"></i>
                                    </div>
                                </div>
                                <div class="prd-rating justify-content-center">
                                    <i class="icon-star-fill fill"></i>
                                    <i class="icon-star-fill fill"></i>
                                    <i class="icon-star-fill fill"></i>
                                    <i class="icon-star-fill fill"></i>
                                    <i class="icon-star-fill fill"></i>
                                </div>
                                <div class="prd-tag">
                                    <a href="#">هجره</a>
                                </div>
                                <h2 class="prd-title">
                                    <a href="{{ route('shop.product', $product) }}">{{ $product->name ?? '-' }}</a>
                                </h2>
                                <div class="prd-description">
                                    {{ $product->short_description }}
                                </div>
                                <div class="prd-action">
                                    <form action="#">
                                        <button
                                                class="btn js-prd-addtocart"
                                                data-product="{&quot;name&quot;: &quot;شلوار چرمی&quot;, &quot;path&quot;:&quot;/shop/images/skins/fashion/products/product-01-1.webp&quot;, &quot;url&quot;:&quot;product.html&quot;, &quot;aspect_ratio&quot;:0.778}"
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
                                            <i class="icon-heart-stroke"></i>
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
                                                href="#" class="circle-label-qview js-prd-quickview"
                                                data-src="ajax/ajax-quickview.html"
                                        >
                                            <i class="icon-eye"></i>
                                            <span>مشاهده
																سریع</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="prd-price">
                                    <div class="price-old">{{ $product->getRegularPrice()  }}</div>
                                    <div class="price-new">{{ $product->getDiscountPrice()  }} تومان
                                    </div>
                                </div>
                                <div class="prd-action">
                                    <div class="prd-action-left">
                                        <form action="#">
                                            <button
                                                    class="btn js-prd-addtocart"
                                                    data-product="{&quot;name&quot;: &quot;شلوار چرمی&quot;, &quot;path&quot;:&quot;/shop/images/skins/fashion/products/product-01-1.webp&quot;, &quot;url&quot;:&quot;product.html&quot;, &quot;aspect_ratio&quot;:0.778}"
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
        <div class="loader-horizontal-sm js-loader-horizontal-sm d-none" data-loader-horizontal="" style="opacity: 0;">
            <span></span>
        </div>
        <div class="circle-loader-wrap">
            <div class="circle-loader">
                <a
                        href="ajax/ajax-product-category.json" data-total="30" data-loaded="12" data-load="6"
                        class="lazyload js-circle-loader" data-start="40" data-to="60"
                >
                    <svg id="svg_d" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="50%" cy="50%" r="63" fill="transparent"></circle>
                        <circle
                                class="js-circle-bar" cx="50%" cy="50%" r="63" fill="transparent"
                                style="stroke-dashoffset: 237.504px;"
                        >
                        </circle>
                    </svg>
                    <svg id="svg_m" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="50%" cy="50%" r="50" fill="transparent"></circle>
                        <circle
                                class="js-circle-bar" cx="50%" cy="50%" r="50" fill="transparent"
                                style="stroke-dashoffset: 188.496px;"
                        >
                        </circle>
                    </svg>
                    <div class="circle-loader-text">بارگزاری بیشتر</div>
                    <div class="circle-loader-text-alt">
                        <span class="js-circle-loader-start">12</span>&nbsp;از&nbsp;<span class="js-circle-loader-end">30</span>
                    </div>
                </a>
            </div>
        </div>
        <!--<div class="mt-2">-->
        <!--<button class="btn" onclick="THEME.loaderHorizontalSm.open()">Show Small Loader</button>-->
        <!--<button class="btn" onclick="THEME.loaderHorizontalSm.close()">Hide Small Loader</button>-->
        <!--</div>-->
        <!--<div class="mt-2">-->
        <!--<button class="btn" onclick="THEME.loaderCategory.open()">Show Opacity</button>-->
        <!--<button class="btn" onclick="THEME.loaderCategory.close()">Hide Opacity</button>-->
        <!--</div>-->
    </div>
</div>
