<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>قالب فروشگاهی فاکسیک - صفحه اصلی - لایه 7</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico"/>
    <link href="/shop/css/vendor/bootstrap.min.css" rel="stylesheet">
    <link href="/shop/css/vendor/vendor.min.css" rel="stylesheet">
    <link href="/shop/css/style-sport.css" rel="stylesheet">
    <link href="fonts/icomoon/icons.css" rel="stylesheet">
</head>

<body class="has-smround-btns has-loader-bg equal-height">
@include('shop.layouts.partials._header')
<div class="page-content">
    <div class="holder mt-0 py-3 py-lg-4 bg-fullheight">
        <div class="circle_decor_wrap d-none d-md-block">
            <svg
                    version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 150 150"
                    style="enable-background:new 0 0 150 150; width: 33%; transform: translate(59%, -59%) rotate(28deg); opacity: .3"
                    xml:space="preserve" class="circle_decor circle_decor--tl"
            >
					<defs>
                        <filter
                                x="0" y="0" width="100%" height="100%" id="dropshadow1_search001"
                                filterUnits="userSpaceOnUse"
                        >
                            <feGaussianBlur in="SourceAlpha" stdDeviation="2"/>
                            <feOffset dx="-7" dy="0" result="offsetblur"/>
                            <feMerge>
                                <feMergeNode/>
                                <feMergeNode in="SourceGraphic"/>
                                <feMergeNode in="SourceGraphic"/>
                            </feMerge>
                        </filter>
                        <filter
                                x="0" y="0" width="100%" height="100%" id="dropshadow2_search001"
                                filterUnits="userSpaceOnUse"
                        >
                            <feGaussianBlur in="SourceAlpha" stdDeviation="2"/>
                            <feOffset dx="7" dy="0" result="offsetblur"/>
                            <feMerge>
                                <feMergeNode/>
                                <feMergeNode in="SourceGraphic"/>
                                <feMergeNode in="SourceGraphic"/>
                            </feMerge>
                        </filter>
                        <clipPath id="circle_decor_mask1_search001">
                            <circle r="73.5" cx="75" cy="75"/>
                        </clipPath>
                    </defs>
                <path
                        d="M74.933,148.5c-9.9,0-19.533-1.95-28.583-5.783c-8.75-3.7-16.6-9-23.333-15.734c-6.75-6.732-12.034-14.582-15.733-23.332C3.45,94.6,1.5,84.967,1.5,75.066c0-9.9,1.95-19.533,5.783-28.583c3.7-8.75,9-16.6,15.733-23.333S37.6,11.116,46.35,7.417c9.05-3.833,18.684-5.783,28.583-5.783c9.901,0,19.534,1.95,28.584,5.783c8.75,3.7,16.6,9,23.332,15.733c6.734,6.733,12.033,14.583,15.734,23.333c3.832,9.067,5.783,18.684,5.783,28.583c0,9.9-1.951,19.533-5.783,28.584c-3.701,8.75-9,16.6-15.734,23.332c-6.732,6.734-14.582,12.034-23.332,15.734C94.467,146.55,84.834,148.5,74.933,148.5z M74.933,24.966c-27.617,0-50.1,22.467-50.1,50.1c0,27.617,22.467,50.1,50.1,50.1c27.618,0,50.1-22.467,50.1-50.1C125.033,47.45,102.551,24.966,74.933,24.966z"
                />
                <circle
                        r="11.5" cx="75" cy="13.5" fill-opacity="0.25" style="filter:url(#dropshadow1_search001)"
                        clip-path="url(#circle_decor_mask1_search001)"
                />
                <circle
                        r="11.5" cx="74" cy="136.5" fill-opacity="0.25" style="filter:url(#dropshadow2_search001)"
                        clip-path="url(#circle_decor_mask1_search001)"
                />
                <path
                        d="M85.977,136.775c0,6.443-5.225,11.666-11.667,11.666l0,0c-6.443,0-11.667-5.223-11.667-11.666l0,0c0-6.443,5.224-11.667,11.667-11.667l0,0C80.752,125.108,85.977,130.332,85.977,136.775L85.977,136.775z"
                />
                <path
                        d="M85.977,13.275c0,6.443-5.225,11.667-11.667,11.667l0,0c-6.443,0-11.667-5.224-11.667-11.667l0,0c0-6.443,5.224-11.667,11.667-11.667l0,0C80.752,1.608,85.977,6.832,85.977,13.275L85.977,13.275z"
                />
				</svg>
        </div>
        <div class="container">
            <div class="title-wrap text-center">
                <h2 class="h1-style text-center">جستجو</h2>
            </div>
            <div class="search-full">
                <form action="#">
                    <div class="form-inline">
                        <input type="text" class="form-control">
                        <button class="btn">جستجو</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="holder holder-mt-xsmall">
        <div class="container">
            <div class="title-wrap text-center">
                <h2 class="h1-style">دسته بندی</h2>
            </div>
            <div class="collection-grid-2">
                <div class="collection-grid-2-item col-9 col-md-quarter col-lg-3">
                    <a href="#" class="bnr-wrap collection-grid-2-item-inside">
                        <div
                                class="collection-grid-2-img image-hover-scale image-container"
                                style="padding-bottom: 77.78%"
                        >
                            <img
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="images/categories/category-img-01.webp" class="lazyload fade-up" alt=""
                            >
                        </div>
                        <h3 class="collection-grid-2-title">کفش زنانه</h3>
                    </a>
                </div>
                <div class="collection-grid-2-item col-9 col-md-quarter col-lg-3">
                    <a href="#" class="bnr-wrap collection-grid-2-item-inside">
                        <div
                                class="collection-grid-2-img image-hover-scale image-container"
                                style="padding-bottom: 77.78%"
                        >
                            <img
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="images/categories/category-img-02.webp" class="lazyload fade-up" alt=""
                            >
                        </div>
                        <h3 class="collection-grid-2-title">لباس ورزشی</h3>
                    </a>
                </div>
                <div class="collection-grid-2-item col-9 col-md-quarter col-lg-3">
                    <a href="#" class="bnr-wrap collection-grid-2-item-inside">
                        <div
                                class="collection-grid-2-img image-hover-scale image-container"
                                style="padding-bottom: 77.78%"
                        >
                            <img
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="images/categories/category-img-03.webp" class="lazyload fade-up" alt=""
                            >
                        </div>
                        <h3 class="collection-grid-2-title">شرت ورزشی زنانه</h3>
                    </a>
                </div>
                <div class="collection-grid-2-item col-9 col-md-quarter col-lg-3">
                    <a href="#" class="bnr-wrap collection-grid-2-item-inside">
                        <div
                                class="collection-grid-2-img image-hover-scale image-container"
                                style="padding-bottom: 77.78%"
                        >
                            <img
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="images/categories/category-img-04.webp" class="lazyload fade-up" alt=""
                            >
                        </div>
                        <h3 class="collection-grid-2-title">تاپ ورزشی</h3>
                    </a>
                </div>
                <div class="collection-grid-2-item col-9 col-md-quarter col-lg-3">
                    <a href="#" class="bnr-wrap collection-grid-2-item-inside">
                        <div
                                class="collection-grid-2-img image-hover-scale image-container"
                                style="padding-bottom: 77.78%"
                        >
                            <img
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="images/categories/category-img-05.webp" class="lazyload fade-up" alt=""
                            >
                        </div>
                        <h3 class="collection-grid-2-title">تی شرت</h3>
                    </a>
                </div>
                <div class="collection-grid-2-item col-9 col-md-quarter col-lg-3">
                    <a href="#" class="bnr-wrap collection-grid-2-item-inside">
                        <div
                                class="collection-grid-2-img image-hover-scale image-container"
                                style="padding-bottom: 77.78%"
                        >
                            <img
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="images/categories/category-img-06.webp" class="lazyload fade-up" alt=""
                            >
                        </div>
                        <h3 class="collection-grid-2-title">پیراهن ورزشی</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="holder">
        <div class="container">
            <div class="title-wrap text-center">
                <h2 class="h1-style">محصولات ویژه</h2>
                <div class="carousel-arrows"></div>
            </div>
            <div
                    class="prd-grid prd-carousel js-prd-carousel data-to-show-4 data-to-show-md-2 data-to-show-sm-2 data-to-show-xs-2 js-product-grid-sm"
            >
                <div class="prd ">
                    <div class="prd-inside">
                        <div class="prd-img-area">
                            <a
                                    href="product.html" class="prd-img image-hover-scale image-container"
                                    style="padding-bottom: 128.48%"
                            >
                                <img
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                        data-src="images/products/product-01.webp" alt="Legging Red/Black"
                                        class="js-prd-img lazyload"
                                >
                                <div class="foxic-loader"></div>
                                <div class="prd-big-circle-labels">
                                    <div class="label-sale"><span>10%- <span class="sale-text">فروش
													ویژه</span></span>
                                        <div class="countdown-circle">
                                            <div class="countdown js-countdown" data-countdown="2021/07/01"></div>
                                        </div>
                                    </div>
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
                                    <ul>
                                        <li data-image="images/products/product-01.webp">
                                            <a
                                                    class="js-color-toggle" data-toggle="tooltip" data-placement="right"
                                                    title="نام رنگ"
                                            >
                                                <img
                                                        src="images/colorswatch/color-red.webp"
                                                        alt=""
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-01-1.webp">
                                            <a
                                                    class="js-color-toggle" data-toggle="tooltip" data-placement="right"
                                                    title="نام رنگ"
                                            >
                                                <img
                                                        src="images/colorswatch/color-mint.webp"
                                                        alt=""
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-01-2.webp">
                                            <a
                                                    class="js-color-toggle" data-toggle="tooltip" data-placement="right"
                                                    title="نام رنگ"
                                            >
                                                <img
                                                        src="images/colorswatch/color-violet.webp"
                                                        alt=""
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-01-3.webp">
                                            <a
                                                    class="js-color-toggle" data-toggle="tooltip" data-placement="right"
                                                    title="نام رنگ"
                                            >
                                                <img
                                                        src="images/colorswatch/color-green.webp"
                                                        alt=""
                                                >
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="list-options color-swatch">
                                <li data-image="images/products/product-01.webp" class="active">
                                    <a
                                            href="#"
                                            class="js-color-toggle" data-toggle="tooltip" data-placement="left"
                                            title="نام رنگ"
                                    >
                                        <img
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                data-src="images/products/product-01.webp" class="lazyload fade-up"
                                                alt="Color Name"
                                        >
                                    </a>
                                </li>
                                <li data-image="images/products/product-01-1.webp">
                                    <a
                                            href="#"
                                            class="js-color-toggle" data-toggle="tooltip" data-placement="left"
                                            title="نام رنگ"
                                    >
                                        <img
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                data-src="images/products/product-01-1.webp" class="lazyload fade-up"
                                                alt="Color Name"
                                        >
                                    </a>
                                </li>
                                <li data-image="images/products/product-01-2.webp">
                                    <a
                                            href="#"
                                            class="js-color-toggle" data-toggle="tooltip" data-placement="left"
                                            title="نام رنگ"
                                    >
                                        <img
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                data-src="images/products/product-01-2.webp" class="lazyload fade-up"
                                                alt="Color Name"
                                        >
                                    </a>
                                </li>
                                <li data-image="images/products/product-01-3.webp">
                                    <a
                                            href="#"
                                            class="js-color-toggle" data-toggle="tooltip" data-placement="left"
                                            title="نام رنگ"
                                    >
                                        <img
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                data-src="images/products/product-01-3.webp" class="lazyload fade-up"
                                                alt="Color Name"
                                        >
                                    </a>
                                </li>
                            </ul>
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
                                        <a href="#">فاکسیک</a>
                                    </div>
                                </div>
                                <h2 class="prd-title">
                                    <a href="product.html">ساق بلند
                                                           قرمز / سیاه
                                    </a>
                                </h2>
                                <div class="prd-description">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم
                                    ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم
                                    ایپسوم متن ساختگی با تولید سادگی نامفهوم
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
                                    <div class="price-old">200,000 تومان</div>
                                    <div class="price-new">180,000 تومان</div>
                                </div>
                                <div class="prd-action">
                                    <div class="prd-action-left">
                                        <form action="#">
                                            <button
                                                    class="btn js-prd-addtocart"
                                                    data-product='{"name": "ساق بلند قرمز / مشکی", "path":"images/products/product-01.webp", "url":"product.html", "aspect_ratio":0.778}'
                                            >افزودن
                                             به سبد خرید
                                            </button>
                                        </form>
                                    </div>
                                    <div class="prd-action-right">
                                        <div class="prd-action-right-inside">
                                            <div class="prd-tag">
                                                <a href="#">فاکسیک</a>
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
                <div class="prd ">
                    <div class="prd-inside">
                        <div class="prd-img-area">
                            <a
                                    href="product.html" class="prd-img image-hover-scale image-container"
                                    style="padding-bottom: 128.48%"
                            >
                                <img
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                        data-src="images/products/product-06.webp" alt="Fitness Jumpsuit Camouflage"
                                        class="js-prd-img lazyload"
                                >
                                <div class="foxic-loader"></div>
                                <div class="prd-big-circle-labels">
                                    <div class="label-new">
                                        <span>جدید</span>
                                    </div>
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
                                        <i class="icon-star-fill fill"></i>
                                        <i
                                                class="icon-star-fill fill"
                                        ></i>
                                        <i class="icon-star-fill fill"></i>
                                    </div>
                                    <div class="prd-tag">
                                        <a href="#">فاکسیک</a>
                                    </div>
                                </div>
                                <h2 class="prd-title">
                                    <a href="product.html">لباس تناسب
                                                           اندام
                                    </a>
                                </h2>
                                <div class="prd-description">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم
                                    ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم
                                    ایپسوم متن ساختگی با تولید سادگی نامفهوم
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
                                    <div class="price-new">180,000 تومان</div>
                                </div>
                                <div class="prd-action">
                                    <div class="prd-action-left">
                                        <form action="#">
                                            <button
                                                    class="btn js-prd-addtocart"
                                                    data-product='{"name": "لباس راحتی تناسب اندام", "path":"images/products/product-06.webp", "url":"product.html", "aspect_ratio":0.778}'
                                            >افزودن
                                             به سبد خرید
                                            </button>
                                        </form>
                                    </div>
                                    <div class="prd-action-right">
                                        <div class="prd-action-right-inside">
                                            <div class="prd-tag">
                                                <a href="#">فاکسیک</a>
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
                <div class="prd ">
                    <div class="prd-inside">
                        <div class="prd-img-area">
                            <a
                                    href="product.html" class="prd-img image-hover-scale image-container"
                                    style="padding-bottom: 128.48%"
                            >
                                <img
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                        data-src="images/products/product-07.webp" alt="Fitness Jumpsuit Black"
                                        class="js-prd-img lazyload"
                                >
                                <div class="foxic-loader"></div>
                                <div class="prd-big-circle-labels">
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
                                        <i class="icon-star-fill fill"></i>
                                        <i
                                                class="icon-star-fill fill"
                                        ></i>
                                        <i class="icon-star-fill fill"></i>
                                    </div>
                                    <div class="prd-tag">
                                        <a href="#">فاکسیک</a>
                                    </div>
                                </div>
                                <h2 class="prd-title">
                                    <a href="product.html">لباس تناسب
                                                           اندام مشکی
                                    </a>
                                </h2>
                                <div class="prd-description">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم
                                    ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم
                                    ایپسوم متن ساختگی با تولید سادگی نامفهوم
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
                                    <div class="price-new">180,000 تومان</div>
                                </div>
                                <div class="prd-action">
                                    <div class="prd-action-left">
                                        <form action="#">
                                            <button
                                                    class="btn js-prd-addtocart"
                                                    data-product='{"name": "لباس تناسب اندام مشکی", "path":"images/products/product-07.webp", "url":"product.html", "aspect_ratio":0.778}'
                                            >افزودن
                                             به سبد خرید
                                            </button>
                                        </form>
                                    </div>
                                    <div class="prd-action-right">
                                        <div class="prd-action-right-inside">
                                            <div class="prd-tag">
                                                <a href="#">فاکسیک</a>
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
                <div class="prd ">
                    <div class="prd-inside">
                        <div class="prd-img-area">
                            <a
                                    href="product.html" class="prd-img image-hover-scale image-container"
                                    style="padding-bottom: 128.48%"
                            >
                                <img
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                        data-src="images/products/product-03.webp" alt="Striped Leggings and Top"
                                        class="js-prd-img lazyload"
                                >
                                <div class="foxic-loader"></div>
                                <div class="prd-big-circle-labels">
                                    <div class="label-sale"><span>50%- <span class="sale-text">فروش
													ویژه</span></span>
                                    </div>
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
                                        <i class="icon-star-fill fill"></i>
                                        <i
                                                class="icon-star-fill fill"
                                        ></i>
                                        <i class="icon-star-fill fill"></i>
                                    </div>
                                    <div class="prd-tag">
                                        <a href="#">فاکسیک</a>
                                    </div>
                                </div>
                                <h2 class="prd-title">
                                    <a href="product.html">شلوار استرچ
                                                           راه راه و تاپ
                                    </a>
                                </h2>
                                <div class="prd-description">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم
                                    ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم
                                    ایپسوم متن ساختگی با تولید سادگی نامفهوم
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
                                    <div class="price-old">149,000 تومان</div>
                                    <div class="price-new">299,000 تومان</div>
                                </div>
                                <div class="prd-action">
                                    <div class="prd-action-left">
                                        <form action="#">
                                            <button
                                                    class="btn js-prd-addtocart"
                                                    data-product='{"name": "شلوار استرچ راه راه با تاپ", "path":"images/products/product-03.webp", "url":"product.html", "aspect_ratio":0.778}'
                                            >افزودن
                                             به سبد خرید
                                            </button>
                                        </form>
                                    </div>
                                    <div class="prd-action-right">
                                        <div class="prd-action-right-inside">
                                            <div class="prd-tag">
                                                <a href="#">فاکسیک</a>
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
                <div class="prd ">
                    <div class="prd-inside">
                        <div class="prd-img-area">
                            <a
                                    href="product.html" class="prd-img image-hover-scale image-container"
                                    style="padding-bottom: 128.48%"
                            >
                                <img
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                        data-src="images/products/product-04.webp" alt="Fitness Jumpsuit"
                                        class="js-prd-img lazyload"
                                >
                                <div class="foxic-loader"></div>
                                <div class="prd-big-circle-labels">
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
                                        <i class="icon-star-fill fill"></i>
                                        <i
                                                class="icon-star-fill fill"
                                        ></i>
                                        <i class="icon-star-fill fill"></i>
                                    </div>
                                    <div class="prd-tag">
                                        <a href="#">فاکسیک</a>
                                    </div>
                                </div>
                                <h2 class="prd-title">
                                    <a href="product.html">لباس راحتی
                                                           تناسب اندام
                                    </a>
                                </h2>
                                <div class="prd-description">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم
                                    ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم
                                    ایپسوم متن ساختگی با تولید سادگی نامفهوم
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
                                    <div class="price-new">280,000 تومان</div>
                                </div>
                                <div class="prd-action">
                                    <div class="prd-action-left">
                                        <form action="#">
                                            <button
                                                    class="btn js-prd-addtocart"
                                                    data-product='{"name": "لباس راحتی تناسب اندام", "path":"images/products/product-04.webp", "url":"product.html", "aspect_ratio":0.778}'
                                            >افزودن
                                             به سبد خرید
                                            </button>
                                        </form>
                                    </div>
                                    <div class="prd-action-right">
                                        <div class="prd-action-right-inside">
                                            <div class="prd-tag">
                                                <a href="#">فاکسیک</a>
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
                <div class="prd ">
                    <div class="prd-inside">
                        <div class="prd-img-area">
                            <a
                                    href="product.html" class="prd-img image-hover-scale image-container"
                                    style="padding-bottom: 128.48%"
                            >
                                <img
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                        data-src="images/products/product-05.webp" alt="Fitness Jumpsuit Khaki/Black"
                                        class="js-prd-img lazyload"
                                >
                                <div class="foxic-loader"></div>
                                <div class="prd-big-circle-labels">
                                    <div class="label-sale"><span>10%- <span class="sale-text">فروش
													ویژه</span></span>
                                    </div>
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
                                        <i class="icon-star-fill fill"></i>
                                        <i
                                                class="icon-star-fill fill"
                                        ></i>
                                        <i class="icon-star-fill fill"></i>
                                    </div>
                                    <div class="prd-tag">
                                        <a href="#">فاکسیک</a>
                                    </div>
                                </div>
                                <h2 class="prd-title">
                                    <a href="product.html">لباس راحتی
                                                           تناسب اندام خاکی/مشکی
                                    </a>
                                </h2>
                                <div class="prd-description">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم
                                    ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم
                                    ایپسوم متن ساختگی با تولید سادگی نامفهوم
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
                                    <div class="price-old">200,000 تومان</div>
                                    <div class="price-new">180,000 تومان</div>
                                </div>
                                <div class="prd-action">
                                    <div class="prd-action-left">
                                        <form action="#">
                                            <button
                                                    class="btn js-prd-addtocart"
                                                    data-product='{"name": "لباس تناسب اندام خاکی / مشکی", "path":"images/products/product-05.webp", "url":"product.html", "aspect_ratio":0.778}'
                                            >افزودن
                                             به سبد خرید
                                            </button>
                                        </form>
                                    </div>
                                    <div class="prd-action-right">
                                        <div class="prd-action-right-inside">
                                            <div class="prd-tag">
                                                <a href="#">فاکسیک</a>
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
                <div class="prd ">
                    <div class="prd-inside">
                        <div class="prd-img-area">
                            <a
                                    href="product.html" class="prd-img image-hover-scale image-container"
                                    style="padding-bottom: 128.48%"
                            >
                                <img
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                        data-src="images/products/product-14.webp" alt="Active Sports Black Shirt"
                                        class="js-prd-img lazyload"
                                >
                                <div class="foxic-loader"></div>
                                <div class="prd-big-circle-labels">
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
                                        <i class="icon-star-fill fill"></i>
                                        <i
                                                class="icon-star-fill fill"
                                        ></i>
                                        <i class="icon-star-fill fill"></i>
                                    </div>
                                    <div class="prd-tag">
                                        <a href="#">فاکسیک</a>
                                    </div>
                                </div>
                                <h2 class="prd-title">
                                    <a href="product.html">پیراهن سیاه
                                                           فعالیت ورزشی
                                    </a>
                                </h2>
                                <div class="prd-description">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم
                                    ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم
                                    ایپسوم متن ساختگی با تولید سادگی نامفهوم
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
                                    <div class="price-new">15,000 تومان</div>
                                </div>
                                <div class="prd-action">
                                    <div class="prd-action-left">
                                        <form action="#">
                                            <button
                                                    class="btn js-prd-addtocart"
                                                    data-product='{"name": "لباس فعالیت ورزشی مشکی", "path":"images/products/product-14.webp", "url":"product.html", "aspect_ratio":0.778}'
                                            >افزودن
                                             به سبد خرید
                                            </button>
                                        </form>
                                    </div>
                                    <div class="prd-action-right">
                                        <div class="prd-action-right-inside">
                                            <div class="prd-tag">
                                                <a href="#">فاکسیک</a>
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
                <div class="prd ">
                    <div class="prd-inside">
                        <div class="prd-img-area">
                            <a
                                    href="product.html" class="prd-img image-hover-scale image-container"
                                    style="padding-bottom: 128.48%"
                            >
                                <img
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                        data-src="images/products/product-15.webp" alt="Demi Puffer Jacket"
                                        class="js-prd-img lazyload"
                                >
                                <div class="foxic-loader"></div>
                                <div class="prd-big-circle-labels">
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
                                        <i class="icon-star-fill fill"></i>
                                        <i
                                                class="icon-star-fill fill"
                                        ></i>
                                        <i class="icon-star-fill fill"></i>
                                    </div>
                                    <div class="prd-tag">
                                        <a href="#">فاکسیک</a>
                                    </div>
                                </div>
                                <h2 class="prd-title">
                                    <a href="product.html">ژاکت پافر
                                                           دِمی
                                    </a>
                                </h2>
                                <div class="prd-description">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم
                                    ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم
                                    ایپسوم متن ساختگی با تولید سادگی نامفهوم
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
                                    <div class="price-new">38,000 تومان</div>
                                </div>
                                <div class="prd-action">
                                    <div class="prd-action-left">
                                        <form action="#">
                                            <button
                                                    class="btn js-prd-addtocart"
                                                    data-product='{"name": "ژاکت پافر دمی", "path":"images/products/product-15.webp", "url":"product.html", "aspect_ratio":0.778}'
                                            >افزودن
                                             به سبد خرید
                                            </button>
                                        </form>
                                    </div>
                                    <div class="prd-action-right">
                                        <div class="prd-action-right-inside">
                                            <div class="prd-tag">
                                                <a href="#">فاکسیک</a>
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
                <div class="prd ">
                    <div class="prd-inside">
                        <div class="prd-img-area">
                            <a
                                    href="product.html" class="prd-img image-hover-scale image-container"
                                    style="padding-bottom: 128.48%"
                            >
                                <img
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                        data-src="images/products/product-20.webp" alt="Winter Puffer Jacket"
                                        class="js-prd-img lazyload"
                                >
                                <div class="foxic-loader"></div>
                                <div class="prd-big-circle-labels">
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
                                        <i class="icon-star-fill fill"></i>
                                        <i
                                                class="icon-star-fill fill"
                                        ></i>
                                        <i class="icon-star-fill fill"></i>
                                    </div>
                                    <div class="prd-tag">
                                        <a href="#">فاکسیک</a>
                                    </div>
                                </div>
                                <h2 class="prd-title">
                                    <a href="product.html">ژاکت پافر
                                                           زمستانی
                                    </a>
                                </h2>
                                <div class="prd-description">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم
                                    ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم
                                    ایپسوم متن ساختگی با تولید سادگی نامفهوم
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
                                    <div class="price-new">35,000 تومان</div>
                                </div>
                                <div class="prd-action">
                                    <div class="prd-action-left">
                                        <form action="#">
                                            <button
                                                    class="btn js-prd-addtocart"
                                                    data-product='{"name": "ژاکت پافر زمستانی", "path":"images/products/product-20.webp", "url":"product.html", "aspect_ratio":0.778}'
                                            >افزودن
                                             به سبد خرید
                                            </button>
                                        </form>
                                    </div>
                                    <div class="prd-action-right">
                                        <div class="prd-action-right-inside">
                                            <div class="prd-tag">
                                                <a href="#">فاکسیک</a>
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
                <div class="prd ">
                    <div class="prd-inside">
                        <div class="prd-img-area">
                            <a
                                    href="product.html" class="prd-img image-hover-scale image-container"
                                    style="padding-bottom: 128.48%"
                            >
                                <img
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                        data-src="images/products/product-18.webp" alt="Jumpsuit with a hood"
                                        class="js-prd-img lazyload"
                                >
                                <div class="foxic-loader"></div>
                                <div class="prd-big-circle-labels">
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
                                        <i class="icon-star-fill fill"></i>
                                        <i
                                                class="icon-star-fill fill"
                                        ></i>
                                        <i class="icon-star-fill fill"></i>
                                    </div>
                                    <div class="prd-tag">
                                        <a href="#">فاکسیک</a>
                                    </div>
                                </div>
                                <h2 class="prd-title">
                                    <a href="product.html">لباس بلند
                                                           با هودی
                                    </a>
                                </h2>
                                <div class="prd-description">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم
                                    ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم
                                    ایپسوم متن ساختگی با تولید سادگی نامفهوم
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
                                    <div class="price-new">18,000 تومان</div>
                                </div>
                                <div class="prd-action">
                                    <div class="prd-action-left">
                                        <form action="#">
                                            <button
                                                    class="btn js-prd-addtocart"
                                                    data-product='{"name": "لبس بلند با هودی", "path":"images/products/product-18.webp", "url":"product.html", "aspect_ratio":0.778}'
                                            >افزودن
                                             به سبد خرید
                                            </button>
                                        </form>
                                    </div>
                                    <div class="prd-action-right">
                                        <div class="prd-action-right-inside">
                                            <div class="prd-tag">
                                                <a href="#">فاکسیک</a>
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
            </div>
        </div>
    </div>
    <div class="holder">
        <div class="container">
            <div class="row text-icn-blocks-with-title">
                <div class="col-md col-md-up-quarter d-none d-lg-block">
                    <div class="title-wrap">
                        <h3>چرا خرید از ما سودآور است</h3>
                    </div>
                </div>
                <div class="col-md">
                    <div class="text-icn-blocks-bg-row">
                        <div class="text-icn-block-bg">
                            <div class="icn">
                                <i class="icon-ribbon"></i>
                            </div>
                            <div class="text">
                                <h4>12 000 000 + کالای برتر</h4>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم
                                   ایپسوم</p>
                            </div>
                        </div>
                        <div class="text-icn-block-bg">
                            <div class="icn">
                                <i class="icon-guarantee"></i>
                            </div>
                            <div class="text">
                                <h4>گارانتی</h4>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم
                                   ایپسوم</p>
                            </div>
                        </div>
                        <div class="text-icn-block-bg">
                            <div class="icn">
                                <i class="icon-delivery-truck"></i>
                            </div>
                            <div class="text">
                                <h4>تحویل در روز</h4>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم
                                   ایپسوم</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="holder global_width">
        <div class="container">
            <div class="row vert-margin justify-content-md-center">
                <div class="col-md-6 order-10">
                    <a
                            href="category.html" class="bnr image-hover-scale bnr--bottom bnr-left"
                            data-fontratio="5.695"
                    >
                        <div class="bnr-img">
                            <img
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-srcset="images/banners/banner-index-05.webp" class="lazyload fade-up" alt=""
                            >
                        </div>
                        <div class="bnr-caption" style="padding: 8%;">
                            <div class="bnr-text3 custom-color">بدو...</div>
                            <div class="bnr-text3 mt-0" style="color: #fff">راه نرو
                            </div>
                            <div class="bnr-btn"><span class="btn btn--lg">شروع
										خرید</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-9 col-md-6">
                    <div class="title-with-arrows">
                        <h2>محصولات جدید</h2>
                        <div class="carousel-arrows"></div>
                    </div>
                    <div class="prd-carousel-vert js-prd-carousel-vert">
                        <div class="prd prd-hor ">
                            <div class="prd-inside">
                                <div class="prd-img-area">
                                    <a
                                            href="product.html" class="prd-img image-hover-scale image-container"
                                            style="padding-bottom: 128.48%"
                                    >
                                        <img
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                data-src="images/products/product-01.webp" alt="Product Name"
                                                class="js-prd-img lazyload"
                                        >
                                        <div class="foxic-loader"></div>
                                        <div class="prd-big-circle-labels">
                                            <div class="label-new">
                                                <span>جدید</span>
                                            </div>
                                            <div class="label-sale"><span>10%- <span class="sale-text">فروش
															ویژه</span></span>
                                                <div class="countdown-circle">
                                                    <div class="countdown js-countdown" data-countdown="2021/07/01">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="prd-circle-labels">
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
                                        <a
                                                href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile"
                                                data-src="ajax/ajax-quickview.html"
                                        >
                                            <i class="icon-eye"></i>
                                            <span>مشاهده
													سریع</span>
                                        </a>
                                    </div>
                                    <ul class="list-options color-swatch">
                                        <li data-image="images/products/product-01.webp" class="active">
                                            <a
                                                    href="#"
                                                    class="js-color-toggle" data-toggle="tooltip" data-placement="left"
                                                    title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-01.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-02.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-02.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-03.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-03.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-04.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-04.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-05.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-05.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                    </ul>
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
                                                <i
                                                        class="icon-star-fill fill"
                                                ></i>
                                            </div>
                                        </div>
                                        <h2 class="prd-title">
                                            <a href="product.html">نام
                                                                   محصول
                                            </a>
                                        </h2>
                                        <div class="prd-description">
                                            لورم ایپسوم متن ساختگی با تولید سادگی
                                            نامفهوم، لورم ایپسوم متن ساختگی با تولید
                                            سادگی نامفهوم، لورم ایپسوم متن ساختگی با
                                            تولید سادگی نامفهوم
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
                                                    <i
                                                            class="icon-heart-hover"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div>
                                                <a
                                                        href="#"
                                                        class="circle-label-qview prd-hide-mobile js-prd-quickview"
                                                        data-src="ajax/ajax-quickview.html"
                                                >
                                                    <i
                                                            class="icon-eye"
                                                    ></i>
                                                    <span>مشاهده
															سریع</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="prd-price">
                                            <div class="price-old">200,000 تومان</div>
                                            <div class="price-new">180,000 تومان
                                            </div>
                                        </div>
                                        <div class="prd-action">
                                            <div class="prd-action-left">
                                                <form action="#">
                                                    <button
                                                            class="btn js-prd-addtocart"
                                                            data-product='{"name": "نام محصول", "path":"images/products/product-01.webp", "url":"product.html", "aspect_ratio":0.778}'
                                                    >افزودن
                                                     به سبد خرید
                                                    </button>
                                                </form>
                                            </div>
                                            <div class="prd-action-right">
                                                <div class="prd-action-right-inside">
                                                    <div class="prd-tag">
                                                        <a href="#">فاکسیک</a>
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
                        <div class="prd prd-hor ">
                            <div class="prd-inside">
                                <div class="prd-img-area">
                                    <a
                                            href="product.html" class="prd-img image-hover-scale image-container"
                                            style="padding-bottom: 128.48%"
                                    >
                                        <img
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                data-src="images/products/product-06.webp" alt="Product Name"
                                                class="js-prd-img lazyload"
                                        >
                                        <div class="foxic-loader"></div>
                                        <div class="prd-big-circle-labels">
                                            <div class="label-new">
                                                <span>جدید</span>
                                            </div>
                                            <div class="label-sale"><span>10%- <span class="sale-text">فروش
															ویژه</span></span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="prd-circle-labels">
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
                                        <a
                                                href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile"
                                                data-src="ajax/ajax-quickview.html"
                                        >
                                            <i class="icon-eye"></i>
                                            <span>مشاهده
													سریع</span>
                                        </a>
                                    </div>
                                    <ul class="list-options color-swatch">
                                        <li data-image="images/products/product-06.webp" class="active">
                                            <a
                                                    href="#"
                                                    class="js-color-toggle" data-toggle="tooltip" data-placement="left"
                                                    title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-06.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-02.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-02.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-03.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-03.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-04.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-04.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-05.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-05.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                    </ul>
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
                                                <i
                                                        class="icon-star-fill fill"
                                                ></i>
                                            </div>
                                        </div>
                                        <h2 class="prd-title">
                                            <a href="product.html">نام
                                                                   محصول
                                            </a>
                                        </h2>
                                        <div class="prd-description">
                                            لورم ایپسوم متن ساختگی با تولید سادگی
                                            نامفهوم، لورم ایپسوم متن ساختگی با تولید
                                            سادگی نامفهوم، لورم ایپسوم متن ساختگی با
                                            تولید سادگی نامفهوم
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
                                                    <i
                                                            class="icon-heart-hover"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div>
                                                <a
                                                        href="#"
                                                        class="circle-label-qview prd-hide-mobile js-prd-quickview"
                                                        data-src="ajax/ajax-quickview.html"
                                                >
                                                    <i
                                                            class="icon-eye"
                                                    ></i>
                                                    <span>مشاهده
															سریع</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="prd-price">
                                            <div class="price-old">200,000 تومان</div>
                                            <div class="price-new">180,000 تومان
                                            </div>
                                        </div>
                                        <div class="prd-action">
                                            <div class="prd-action-left">
                                                <form action="#">
                                                    <button
                                                            class="btn js-prd-addtocart"
                                                            data-product='{"name": "نام محصول", "path":"images/products/product-06.webp", "url":"product.html", "aspect_ratio":0.778}'
                                                    >افزودن
                                                     به سبد خرید
                                                    </button>
                                                </form>
                                            </div>
                                            <div class="prd-action-right">
                                                <div class="prd-action-right-inside">
                                                    <div class="prd-tag">
                                                        <a href="#">فاکسیک</a>
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
                        <div class="prd prd-hor ">
                            <div class="prd-inside">
                                <div class="prd-img-area">
                                    <a
                                            href="product.html" class="prd-img image-hover-scale image-container"
                                            style="padding-bottom: 128.48%"
                                    >
                                        <img
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                data-src="images/products/product-05.webp" alt="Product Name"
                                                class="js-prd-img lazyload"
                                        >
                                        <div class="foxic-loader"></div>
                                        <div class="prd-big-circle-labels">
                                            <div class="label-new">
                                                <span>جدید</span>
                                            </div>
                                            <div class="label-sale"><span>10%- <span class="sale-text">فروش
															ویژه</span></span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="prd-circle-labels">
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
                                        <a
                                                href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile"
                                                data-src="ajax/ajax-quickview.html"
                                        >
                                            <i class="icon-eye"></i>
                                            <span>مشاهده
													سریع</span>
                                        </a>
                                    </div>
                                    <ul class="list-options color-swatch">
                                        <li data-image="images/products/product-05.webp" class="active">
                                            <a
                                                    href="#"
                                                    class="js-color-toggle" data-toggle="tooltip" data-placement="left"
                                                    title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-05.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-02.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-02.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-03.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-03.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-04.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-04.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-05.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-05.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                    </ul>
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
                                                <i
                                                        class="icon-star-fill fill"
                                                ></i>
                                            </div>
                                        </div>
                                        <h2 class="prd-title">
                                            <a href="product.html">نام
                                                                   محصول
                                            </a>
                                        </h2>
                                        <div class="prd-description">
                                            لورم ایپسوم متن ساختگی با تولید سادگی
                                            نامفهوم، لورم ایپسوم متن ساختگی با تولید
                                            سادگی نامفهوم، لورم ایپسوم متن ساختگی با
                                            تولید سادگی نامفهوم
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
                                                    <i
                                                            class="icon-heart-hover"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div>
                                                <a
                                                        href="#"
                                                        class="circle-label-qview prd-hide-mobile js-prd-quickview"
                                                        data-src="ajax/ajax-quickview.html"
                                                >
                                                    <i
                                                            class="icon-eye"
                                                    ></i>
                                                    <span>مشاهده
															سریع</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="prd-price">
                                            <div class="price-old">200,000 تومان</div>
                                            <div class="price-new">180,000 تومان
                                            </div>
                                        </div>
                                        <div class="prd-action">
                                            <div class="prd-action-left">
                                                <form action="#">
                                                    <button
                                                            class="btn js-prd-addtocart"
                                                            data-product='{"name": "نام محصول", "path":"images/products/product-05.webp", "url":"product.html", "aspect_ratio":0.778}'
                                                    >افزودن
                                                     به سبد خرید
                                                    </button>
                                                </form>
                                            </div>
                                            <div class="prd-action-right">
                                                <div class="prd-action-right-inside">
                                                    <div class="prd-tag">
                                                        <a href="#">فاکسیک</a>
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
                        <div class="prd prd-hor ">
                            <div class="prd-inside">
                                <div class="prd-img-area">
                                    <a
                                            href="product.html" class="prd-img image-hover-scale image-container"
                                            style="padding-bottom: 128.48%"
                                    >
                                        <img
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                data-src="images/products/product-04.webp" alt="Product Name"
                                                class="js-prd-img lazyload"
                                        >
                                        <div class="foxic-loader"></div>
                                        <div class="prd-big-circle-labels">
                                            <div class="label-new">
                                                <span>جدید</span>
                                            </div>
                                            <div class="label-sale"><span>10%- <span class="sale-text">فروش
															ویژه</span></span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="prd-circle-labels">
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
                                        <a
                                                href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile"
                                                data-src="ajax/ajax-quickview.html"
                                        >
                                            <i class="icon-eye"></i>
                                            <span>مشاهده
													سریع</span>
                                        </a>
                                    </div>
                                    <ul class="list-options color-swatch">
                                        <li data-image="images/products/product-04.webp" class="active">
                                            <a
                                                    href="#"
                                                    class="js-color-toggle" data-toggle="tooltip" data-placement="left"
                                                    title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-04.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-02.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-02.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-03.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-03.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-04.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-04.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-05.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-05.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                    </ul>
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
                                                <i
                                                        class="icon-star-fill fill"
                                                ></i>
                                            </div>
                                        </div>
                                        <h2 class="prd-title">
                                            <a href="product.html">نام
                                                                   محصول
                                            </a>
                                        </h2>
                                        <div class="prd-description">
                                            لورم ایپسوم متن ساختگی با تولید سادگی
                                            نامفهوم، لورم ایپسوم متن ساختگی با تولید
                                            سادگی نامفهوم، لورم ایپسوم متن ساختگی با
                                            تولید سادگی نامفهوم
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
                                                    <i
                                                            class="icon-heart-hover"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div>
                                                <a
                                                        href="#"
                                                        class="circle-label-qview prd-hide-mobile js-prd-quickview"
                                                        data-src="ajax/ajax-quickview.html"
                                                >
                                                    <i
                                                            class="icon-eye"
                                                    ></i>
                                                    <span>مشاهده
															سریع</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="prd-price">
                                            <div class="price-old">200,000 تومان</div>
                                            <div class="price-new">180,000 تومان
                                            </div>
                                        </div>
                                        <div class="prd-action">
                                            <div class="prd-action-left">
                                                <form action="#">
                                                    <button
                                                            class="btn js-prd-addtocart"
                                                            data-product='{"name": "نام محصول", "path":"images/products/product-04.webp", "url":"product.html", "aspect_ratio":0.778}'
                                                    >افزودن
                                                     به سبد خرید
                                                    </button>
                                                </form>
                                            </div>
                                            <div class="prd-action-right">
                                                <div class="prd-action-right-inside">
                                                    <div class="prd-tag">
                                                        <a href="#">فاکسیک</a>
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
                        <div class="prd prd-hor ">
                            <div class="prd-inside">
                                <div class="prd-img-area">
                                    <a
                                            href="product.html" class="prd-img image-hover-scale image-container"
                                            style="padding-bottom: 128.48%"
                                    >
                                        <img
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                data-src="images/products/product-03.webp" alt="Product Name"
                                                class="js-prd-img lazyload"
                                        >
                                        <div class="foxic-loader"></div>
                                        <div class="prd-big-circle-labels">
                                            <div class="label-new">
                                                <span>جدید</span>
                                            </div>
                                            <div class="label-sale"><span>10%- <span class="sale-text">فروش
															ویژه</span></span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="prd-circle-labels">
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
                                        <a
                                                href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile"
                                                data-src="ajax/ajax-quickview.html"
                                        >
                                            <i class="icon-eye"></i>
                                            <span>مشاهده
													سریع</span>
                                        </a>
                                    </div>
                                    <ul class="list-options color-swatch">
                                        <li data-image="images/products/product-03.webp" class="active">
                                            <a
                                                    href="#"
                                                    class="js-color-toggle" data-toggle="tooltip" data-placement="left"
                                                    title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-03.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-02.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-02.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-03.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-03.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-04.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-04.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-05.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-05.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                    </ul>
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
                                                <i
                                                        class="icon-star-fill fill"
                                                ></i>
                                            </div>
                                        </div>
                                        <h2 class="prd-title">
                                            <a href="product.html">نام
                                                                   محصول
                                            </a>
                                        </h2>
                                        <div class="prd-description">
                                            لورم ایپسوم متن ساختگی با تولید سادگی
                                            نامفهوم، لورم ایپسوم متن ساختگی با تولید
                                            سادگی نامفهوم، لورم ایپسوم متن ساختگی با
                                            تولید سادگی نامفهوم
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
                                                    <i
                                                            class="icon-heart-hover"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div>
                                                <a
                                                        href="#"
                                                        class="circle-label-qview prd-hide-mobile js-prd-quickview"
                                                        data-src="ajax/ajax-quickview.html"
                                                >
                                                    <i
                                                            class="icon-eye"
                                                    ></i>
                                                    <span>مشاهده
															سریع</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="prd-price">
                                            <div class="price-old">200,000 تومان</div>
                                            <div class="price-new">180,000 تومان
                                            </div>
                                        </div>
                                        <div class="prd-action">
                                            <div class="prd-action-left">
                                                <form action="#">
                                                    <button
                                                            class="btn js-prd-addtocart"
                                                            data-product='{"name": "نام محصول", "path":"images/products/product-03.webp", "url":"product.html", "aspect_ratio":0.778}'
                                                    >افزودن
                                                     به سبد خرید
                                                    </button>
                                                </form>
                                            </div>
                                            <div class="prd-action-right">
                                                <div class="prd-action-right-inside">
                                                    <div class="prd-tag">
                                                        <a href="#">فاکسیک</a>
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
                        <div class="prd prd-hor ">
                            <div class="prd-inside">
                                <div class="prd-img-area">
                                    <a
                                            href="product.html" class="prd-img image-hover-scale image-container"
                                            style="padding-bottom: 128.48%"
                                    >
                                        <img
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                data-src="images/products/product-02.webp" alt="Product Name"
                                                class="js-prd-img lazyload"
                                        >
                                        <div class="foxic-loader"></div>
                                        <div class="prd-big-circle-labels">
                                            <div class="label-new">
                                                <span>جدید</span>
                                            </div>
                                            <div class="label-sale"><span>10%- <span class="sale-text">فروش
															ویژه</span></span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="prd-circle-labels">
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
                                        <a
                                                href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile"
                                                data-src="ajax/ajax-quickview.html"
                                        >
                                            <i class="icon-eye"></i>
                                            <span>مشاهده
													سریع</span>
                                        </a>
                                    </div>
                                    <ul class="list-options color-swatch">
                                        <li data-image="images/products/product-02.webp" class="active">
                                            <a
                                                    href="#"
                                                    class="js-color-toggle" data-toggle="tooltip" data-placement="left"
                                                    title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-02.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-02.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-02.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-03.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-03.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-04.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-04.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-05.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-05.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                    </ul>
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
                                                <i
                                                        class="icon-star-fill fill"
                                                ></i>
                                            </div>
                                        </div>
                                        <h2 class="prd-title">
                                            <a href="product.html">نام
                                                                   محصول
                                            </a>
                                        </h2>
                                        <div class="prd-description">
                                            لورم ایپسوم متن ساختگی با تولید سادگی
                                            نامفهوم، لورم ایپسوم متن ساختگی با تولید
                                            سادگی نامفهوم، لورم ایپسوم متن ساختگی با
                                            تولید سادگی نامفهوم
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
                                                    <i
                                                            class="icon-heart-hover"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div>
                                                <a
                                                        href="#"
                                                        class="circle-label-qview prd-hide-mobile js-prd-quickview"
                                                        data-src="ajax/ajax-quickview.html"
                                                >
                                                    <i
                                                            class="icon-eye"
                                                    ></i>
                                                    <span>مشاهده
															سریع</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="prd-price">
                                            <div class="price-old">200,000 تومان</div>
                                            <div class="price-new">180,000 تومان
                                            </div>
                                        </div>
                                        <div class="prd-action">
                                            <div class="prd-action-left">
                                                <form action="#">
                                                    <button
                                                            class="btn js-prd-addtocart"
                                                            data-product='{"name": "نام محصول", "path":"images/products/product-02.webp", "url":"product.html", "aspect_ratio":0.778}'
                                                    >افزودن
                                                     به سبد خرید
                                                    </button>
                                                </form>
                                            </div>
                                            <div class="prd-action-right">
                                                <div class="prd-action-right-inside">
                                                    <div class="prd-tag">
                                                        <a href="#">فاکسیک</a>
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
                    </div>
                </div>
                <div class="col-sm-9 col-md-6">
                    <div class="title-with-arrows">
                        <h2>داغترین محصولات</h2>
                        <div class="carousel-arrows"></div>
                    </div>
                    <div class="prd-carousel-vert js-prd-carousel-vert">
                        <div class="prd prd-hor ">
                            <div class="prd-inside">
                                <div class="prd-img-area">
                                    <a
                                            href="product.html" class="prd-img image-hover-scale image-container"
                                            style="padding-bottom: 128.48%"
                                    >
                                        <img
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                data-src="images/products/product-01.webp" alt="Product Name"
                                                class="js-prd-img lazyload"
                                        >
                                        <div class="foxic-loader"></div>
                                        <div class="prd-big-circle-labels">
                                            <div class="label-new">
                                                <span>جدید</span>
                                            </div>
                                            <div class="label-sale"><span>10%- <span class="sale-text">فروش
															ویژه</span></span>
                                                <div class="countdown-circle">
                                                    <div class="countdown js-countdown" data-countdown="2021/07/01">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="prd-circle-labels">
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
                                        <a
                                                href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile"
                                                data-src="ajax/ajax-quickview.html"
                                        >
                                            <i class="icon-eye"></i>
                                            <span>مشاهده
													سریع</span>
                                        </a>
                                    </div>
                                    <ul class="list-options color-swatch">
                                        <li data-image="images/products/product-01.webp" class="active">
                                            <a
                                                    href="#"
                                                    class="js-color-toggle" data-toggle="tooltip" data-placement="left"
                                                    title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-01.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-02.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-02.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-03.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-03.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-04.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-04.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-05.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-05.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                    </ul>
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
                                                <i
                                                        class="icon-star-fill fill"
                                                ></i>
                                            </div>
                                        </div>
                                        <h2 class="prd-title">
                                            <a href="product.html">نام
                                                                   محصول
                                            </a>
                                        </h2>
                                        <div class="prd-description">
                                            لورم ایپسوم متن ساختگی با تولید سادگی
                                            نامفهوم، لورم ایپسوم متن ساختگی با تولید
                                            سادگی نامفهوم، لورم ایپسوم متن ساختگی با
                                            تولید سادگی نامفهوم
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
                                                    <i
                                                            class="icon-heart-hover"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div>
                                                <a
                                                        href="#"
                                                        class="circle-label-qview prd-hide-mobile js-prd-quickview"
                                                        data-src="ajax/ajax-quickview.html"
                                                >
                                                    <i
                                                            class="icon-eye"
                                                    ></i>
                                                    <span>مشاهده
															سریع</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="prd-price">
                                            <div class="price-old">200,000 تومان</div>
                                            <div class="price-new">180,000 تومان
                                            </div>
                                        </div>
                                        <div class="prd-action">
                                            <div class="prd-action-left">
                                                <form action="#">
                                                    <button
                                                            class="btn js-prd-addtocart"
                                                            data-product='{"name": "نام محصول", "path":"images/products/product-01.webp", "url":"product.html", "aspect_ratio":0.778}'
                                                    >افزودن
                                                     به سبد خرید
                                                    </button>
                                                </form>
                                            </div>
                                            <div class="prd-action-right">
                                                <div class="prd-action-right-inside">
                                                    <div class="prd-tag">
                                                        <a href="#">فاکسیک</a>
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
                        <div class="prd prd-hor ">
                            <div class="prd-inside">
                                <div class="prd-img-area">
                                    <a
                                            href="product.html" class="prd-img image-hover-scale image-container"
                                            style="padding-bottom: 128.48%"
                                    >
                                        <img
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                data-src="images/products/product-06.webp" alt="Product Name"
                                                class="js-prd-img lazyload"
                                        >
                                        <div class="foxic-loader"></div>
                                        <div class="prd-big-circle-labels">
                                            <div class="label-new">
                                                <span>جدید</span>
                                            </div>
                                            <div class="label-sale"><span>10%- <span class="sale-text">فروش
															ویژه</span></span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="prd-circle-labels">
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
                                        <a
                                                href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile"
                                                data-src="ajax/ajax-quickview.html"
                                        >
                                            <i class="icon-eye"></i>
                                            <span>مشاهده
													سریع</span>
                                        </a>
                                    </div>
                                    <ul class="list-options color-swatch">
                                        <li data-image="images/products/product-06.webp" class="active">
                                            <a
                                                    href="#"
                                                    class="js-color-toggle" data-toggle="tooltip" data-placement="left"
                                                    title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-06.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-02.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-02.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-03.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-03.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-04.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-04.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-05.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-05.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                    </ul>
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
                                                <i
                                                        class="icon-star-fill fill"
                                                ></i>
                                            </div>
                                        </div>
                                        <h2 class="prd-title">
                                            <a href="product.html">نام
                                                                   محصول
                                            </a>
                                        </h2>
                                        <div class="prd-description">
                                            لورم ایپسوم متن ساختگی با تولید سادگی
                                            نامفهوم، لورم ایپسوم متن ساختگی با تولید
                                            سادگی نامفهوم، لورم ایپسوم متن ساختگی با
                                            تولید سادگی نامفهوم
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
                                                    <i
                                                            class="icon-heart-hover"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div>
                                                <a
                                                        href="#"
                                                        class="circle-label-qview prd-hide-mobile js-prd-quickview"
                                                        data-src="ajax/ajax-quickview.html"
                                                >
                                                    <i
                                                            class="icon-eye"
                                                    ></i>
                                                    <span>مشاهده
															سریع</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="prd-price">
                                            <div class="price-old">200,000 تومان</div>
                                            <div class="price-new">180,000 تومان
                                            </div>
                                        </div>
                                        <div class="prd-action">
                                            <div class="prd-action-left">
                                                <form action="#">
                                                    <button
                                                            class="btn js-prd-addtocart"
                                                            data-product='{"name": "نام محصول", "path":"images/products/product-06.webp", "url":"product.html", "aspect_ratio":0.778}'
                                                    >افزودن
                                                     به سبد خرید
                                                    </button>
                                                </form>
                                            </div>
                                            <div class="prd-action-right">
                                                <div class="prd-action-right-inside">
                                                    <div class="prd-tag">
                                                        <a href="#">فاکسیک</a>
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
                        <div class="prd prd-hor ">
                            <div class="prd-inside">
                                <div class="prd-img-area">
                                    <a
                                            href="product.html" class="prd-img image-hover-scale image-container"
                                            style="padding-bottom: 128.48%"
                                    >
                                        <img
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                data-src="images/products/product-05.webp" alt="Product Name"
                                                class="js-prd-img lazyload"
                                        >
                                        <div class="foxic-loader"></div>
                                        <div class="prd-big-circle-labels">
                                            <div class="label-new">
                                                <span>جدید</span>
                                            </div>
                                            <div class="label-sale"><span>10%- <span class="sale-text">فروش
															ویژه</span></span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="prd-circle-labels">
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
                                        <a
                                                href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile"
                                                data-src="ajax/ajax-quickview.html"
                                        >
                                            <i class="icon-eye"></i>
                                            <span>مشاهده
													سریع</span>
                                        </a>
                                    </div>
                                    <ul class="list-options color-swatch">
                                        <li data-image="images/products/product-05.webp" class="active">
                                            <a
                                                    href="#"
                                                    class="js-color-toggle" data-toggle="tooltip" data-placement="left"
                                                    title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-05.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-02.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-02.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-03.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-03.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-04.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-04.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-05.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-05.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                    </ul>
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
                                                <i
                                                        class="icon-star-fill fill"
                                                ></i>
                                            </div>
                                        </div>
                                        <h2 class="prd-title">
                                            <a href="product.html">نام
                                                                   محصول
                                            </a>
                                        </h2>
                                        <div class="prd-description">
                                            لورم ایپسوم متن ساختگی با تولید سادگی
                                            نامفهوم، لورم ایپسوم متن ساختگی با تولید
                                            سادگی نامفهوم، لورم ایپسوم متن ساختگی با
                                            تولید سادگی نامفهوم
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
                                                    <i
                                                            class="icon-heart-hover"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div>
                                                <a
                                                        href="#"
                                                        class="circle-label-qview prd-hide-mobile js-prd-quickview"
                                                        data-src="ajax/ajax-quickview.html"
                                                >
                                                    <i
                                                            class="icon-eye"
                                                    ></i>
                                                    <span>مشاهده
															سریع</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="prd-price">
                                            <div class="price-old">200,000 تومان</div>
                                            <div class="price-new">180,000 تومان
                                            </div>
                                        </div>
                                        <div class="prd-action">
                                            <div class="prd-action-left">
                                                <form action="#">
                                                    <button
                                                            class="btn js-prd-addtocart"
                                                            data-product='{"name": "نام محصول", "path":"images/products/product-05.webp", "url":"product.html", "aspect_ratio":0.778}'
                                                    >افزودن
                                                     به سبد خرید
                                                    </button>
                                                </form>
                                            </div>
                                            <div class="prd-action-right">
                                                <div class="prd-action-right-inside">
                                                    <div class="prd-tag">
                                                        <a href="#">فاکسیک</a>
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
                        <div class="prd prd-hor ">
                            <div class="prd-inside">
                                <div class="prd-img-area">
                                    <a
                                            href="product.html" class="prd-img image-hover-scale image-container"
                                            style="padding-bottom: 128.48%"
                                    >
                                        <img
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                data-src="images/products/product-04.webp" alt="Product Name"
                                                class="js-prd-img lazyload"
                                        >
                                        <div class="foxic-loader"></div>
                                        <div class="prd-big-circle-labels">
                                            <div class="label-new">
                                                <span>جدید</span>
                                            </div>
                                            <div class="label-sale"><span>10%- <span class="sale-text">فروش
															ویژه</span></span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="prd-circle-labels">
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
                                        <a
                                                href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile"
                                                data-src="ajax/ajax-quickview.html"
                                        >
                                            <i class="icon-eye"></i>
                                            <span>مشاهده
													سریع</span>
                                        </a>
                                    </div>
                                    <ul class="list-options color-swatch">
                                        <li data-image="images/products/product-04.webp" class="active">
                                            <a
                                                    href="#"
                                                    class="js-color-toggle" data-toggle="tooltip" data-placement="left"
                                                    title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-04.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-02.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-02.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-03.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-03.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-04.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-04.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-05.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-05.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                    </ul>
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
                                                <i
                                                        class="icon-star-fill fill"
                                                ></i>
                                            </div>
                                        </div>
                                        <h2 class="prd-title">
                                            <a href="product.html">نام
                                                                   محصول
                                            </a>
                                        </h2>
                                        <div class="prd-description">
                                            لورم ایپسوم متن ساختگی با تولید سادگی
                                            نامفهوم، لورم ایپسوم متن ساختگی با تولید
                                            سادگی نامفهوم، لورم ایپسوم متن ساختگی با
                                            تولید سادگی نامفهوم
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
                                                    <i
                                                            class="icon-heart-hover"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div>
                                                <a
                                                        href="#"
                                                        class="circle-label-qview prd-hide-mobile js-prd-quickview"
                                                        data-src="ajax/ajax-quickview.html"
                                                >
                                                    <i
                                                            class="icon-eye"
                                                    ></i>
                                                    <span>مشاهده
															سریع</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="prd-price">
                                            <div class="price-old">200,000 تومان</div>
                                            <div class="price-new">180,000 تومان
                                            </div>
                                        </div>
                                        <div class="prd-action">
                                            <div class="prd-action-left">
                                                <form action="#">
                                                    <button
                                                            class="btn js-prd-addtocart"
                                                            data-product='{"name": "نام محصول", "path":"images/products/product-04.webp", "url":"product.html", "aspect_ratio":0.778}'
                                                    >افزودن
                                                     به سبد خرید
                                                    </button>
                                                </form>
                                            </div>
                                            <div class="prd-action-right">
                                                <div class="prd-action-right-inside">
                                                    <div class="prd-tag">
                                                        <a href="#">فاکسیک</a>
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
                        <div class="prd prd-hor ">
                            <div class="prd-inside">
                                <div class="prd-img-area">
                                    <a
                                            href="product.html" class="prd-img image-hover-scale image-container"
                                            style="padding-bottom: 128.48%"
                                    >
                                        <img
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                data-src="images/products/product-03.webp" alt="Product Name"
                                                class="js-prd-img lazyload"
                                        >
                                        <div class="foxic-loader"></div>
                                        <div class="prd-big-circle-labels">
                                            <div class="label-new">
                                                <span>جدید</span>
                                            </div>
                                            <div class="label-sale"><span>10%- <span class="sale-text">فروش
															ویژه</span></span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="prd-circle-labels">
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
                                        <a
                                                href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile"
                                                data-src="ajax/ajax-quickview.html"
                                        >
                                            <i class="icon-eye"></i>
                                            <span>مشاهده
													سریع</span>
                                        </a>
                                    </div>
                                    <ul class="list-options color-swatch">
                                        <li data-image="images/products/product-03.webp" class="active">
                                            <a
                                                    href="#"
                                                    class="js-color-toggle" data-toggle="tooltip" data-placement="left"
                                                    title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-03.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-02.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-02.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-03.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-03.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-04.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-04.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-05.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-05.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                    </ul>
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
                                                <i
                                                        class="icon-star-fill fill"
                                                ></i>
                                            </div>
                                        </div>
                                        <h2 class="prd-title">
                                            <a href="product.html">نام
                                                                   محصول
                                            </a>
                                        </h2>
                                        <div class="prd-description">
                                            لورم ایپسوم متن ساختگی با تولید سادگی
                                            نامفهوم، لورم ایپسوم متن ساختگی با تولید
                                            سادگی نامفهوم، لورم ایپسوم متن ساختگی با
                                            تولید سادگی نامفهوم
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
                                                    <i
                                                            class="icon-heart-hover"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div>
                                                <a
                                                        href="#"
                                                        class="circle-label-qview prd-hide-mobile js-prd-quickview"
                                                        data-src="ajax/ajax-quickview.html"
                                                >
                                                    <i
                                                            class="icon-eye"
                                                    ></i>
                                                    <span>مشاهده
															سریع</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="prd-price">
                                            <div class="price-old">200,000 تومان</div>
                                            <div class="price-new">180,000 تومان
                                            </div>
                                        </div>
                                        <div class="prd-action">
                                            <div class="prd-action-left">
                                                <form action="#">
                                                    <button
                                                            class="btn js-prd-addtocart"
                                                            data-product='{"name": "نام محصول", "path":"images/products/product-03.webp", "url":"product.html", "aspect_ratio":0.778}'
                                                    >افزودن
                                                     به سبد خرید
                                                    </button>
                                                </form>
                                            </div>
                                            <div class="prd-action-right">
                                                <div class="prd-action-right-inside">
                                                    <div class="prd-tag">
                                                        <a href="#">فاکسیک</a>
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
                        <div class="prd prd-hor ">
                            <div class="prd-inside">
                                <div class="prd-img-area">
                                    <a
                                            href="product.html" class="prd-img image-hover-scale image-container"
                                            style="padding-bottom: 128.48%"
                                    >
                                        <img
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                data-src="images/products/product-02.webp" alt="Product Name"
                                                class="js-prd-img lazyload"
                                        >
                                        <div class="foxic-loader"></div>
                                        <div class="prd-big-circle-labels">
                                            <div class="label-new">
                                                <span>جدید</span>
                                            </div>
                                            <div class="label-sale"><span>10%- <span class="sale-text">فروش
															ویژه</span></span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="prd-circle-labels">
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
                                        <a
                                                href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile"
                                                data-src="ajax/ajax-quickview.html"
                                        >
                                            <i class="icon-eye"></i>
                                            <span>مشاهده
													سریع</span>
                                        </a>
                                    </div>
                                    <ul class="list-options color-swatch">
                                        <li data-image="images/products/product-02.webp" class="active">
                                            <a
                                                    href="#"
                                                    class="js-color-toggle" data-toggle="tooltip" data-placement="left"
                                                    title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-02.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-02.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-02.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-03.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-03.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-04.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-04.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                        <li data-image="images/products/product-05.webp">
                                            <a
                                                    href="#" class="js-color-toggle" data-toggle="tooltip"
                                                    data-placement="left" title="نام رنگ"
                                            >
                                                <img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="images/products/product-05.webp"
                                                        class="lazyload fade-up" alt="Color Name"
                                                >
                                            </a>
                                        </li>
                                    </ul>
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
                                                <i
                                                        class="icon-star-fill fill"
                                                ></i>
                                            </div>
                                        </div>
                                        <h2 class="prd-title">
                                            <a href="product.html">نام
                                                                   محصول
                                            </a>
                                        </h2>
                                        <div class="prd-description">
                                            لورم ایپسوم متن ساختگی با تولید سادگی
                                            نامفهوم، لورم ایپسوم متن ساختگی با تولید
                                            سادگی نامفهوم، لورم ایپسوم متن ساختگی با
                                            تولید سادگی نامفهوم
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
                                                    <i
                                                            class="icon-heart-hover"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div>
                                                <a
                                                        href="#"
                                                        class="circle-label-qview prd-hide-mobile js-prd-quickview"
                                                        data-src="ajax/ajax-quickview.html"
                                                >
                                                    <i
                                                            class="icon-eye"
                                                    ></i>
                                                    <span>مشاهده
															سریع</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="prd-price">
                                            <div class="price-old">200,000 تومان</div>
                                            <div class="price-new">180,000 تومان
                                            </div>
                                        </div>
                                        <div class="prd-action">
                                            <div class="prd-action-left">
                                                <form action="#">
                                                    <button
                                                            class="btn js-prd-addtocart"
                                                            data-product='{"name": "نام محصول", "path":"images/products/product-02.webp", "url":"product.html", "aspect_ratio":0.778}'
                                                    >افزودن
                                                     به سبد خرید
                                                    </button>
                                                </form>
                                            </div>
                                            <div class="prd-action-right">
                                                <div class="prd-action-right-inside">
                                                    <div class="prd-tag">
                                                        <a href="#">فاکسیک</a>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="holder holder-with-bg holder-pt-xsmall holder-pb-xsmall bg-custom">
        <div class="container">
            <div class="text-icn-blocks-single row">
                <div class="col-auto">
                    <div class="text-icn-blocks-single-icon">
                        <i class="icon--giftAnimate icon-gift-card"></i>
                    </div>
                </div>
                <div class="text-icn-blocks-single-text col-auto">
                    <div class="text-icn-blocks-single-text1 ">در وقت گرانبهای خود صرفه
                                                               جویی کنید
                    </div>
                    <div class="text-icn-blocks-single-text2 ">قول بیش از حد: قول اضافی
                                                               که نمی توانید برآورده کنید ارائه نکنید.
                    </div>
                </div>
                <div class="text-icn-blocks-single-button col-auto">
                    <a href="#" target="_blank" class="btn">خرید</a>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="page-footer footer-style-2">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-xl-5">
                    <div class="footer-block collapsed-mobile">
                        <div class="title">
                            <h4 class="text-uppercase">درباره ما</h4>
                            <span class="toggle-arrow"><span></span><span></span></span>
                        </div>
                        <div class="collapsed-content">
                            <div class="footer-txt-block">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم
                                ایپسوم متن ساختگی با تولید سادگی نامفهوم لورم ایپسوم متن
                                ساختگی با تولید سادگی نامفهوم، لورم ایپسوم متن ساختگی با
                                تولید سادگی نامفهوم، لورم ایپسوم متن ساختگی
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-xl">
                    <div class="footer-block collapsed-mobile">
                        <div class="title">
                            <h4 class="text-uppercase">اطلاعات تماس</h4>
                            <span class="toggle-arrow"><span></span><span></span></span>
                        </div>
                        <div class="collapsed-content">
                            <ul>
                                <li>تلفن : 02155667788</li>
                                <li>ایمیل :
                                    <a href="mailto:Exampleshop@gmail.com">Exampleshop@gmail.com</a>
                                </li>
                                <li>ساعت کاری : شنبه تا چهارشنبه، 10:00 - 18:00</li>
                                <li>
                                    <a href="#">ارائه ویدئو</a>
                                </li>
                                <li>
                                    <a href="#" class="link-special">پشتیبانی آنلاین</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl">
                    <div class="footer-block collapsed-mobile">
                        <div class="title">
                            <h4 class="text-uppercase">لینک ها</h4>
                            <span class="toggle-arrow"><span></span><span></span></span>
                        </div>
                        <div class="collapsed-content">
                            <ul>
                                <li>
                                    <a href="#" class="custom-color">پشتیبانی آنلاین</a>
                                </li>
                                <li>
                                    <a href="#" class="custom-color">پشتیبانی آنلاین</a>
                                </li>
                                <li>
                                    <a href="#" class="custom-color">بازگشت وجه</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl">
                    <div class="footer-block collapsed-mobile">
                        <div class="title">
                            <h4 class="text-uppercase">شبکه های اجتماعی</h4>
                            <span class="toggle-arrow"><span></span><span></span></span>
                        </div>
                        <div class="collapsed-content">
                            <ul class="social-list-circle-sm">
                                <li>
                                    <a href="#">
                                        <i class="icon-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-google"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-fancy"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-vimeo"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-pinterest"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-xl">
                    <div class="footer-block collapsed-mobile">
                        <div class="title">
                            <h4 class="text-uppercase">خبرنامه</h4>
                            <span class="toggle-arrow"><span></span><span></span></span>
                        </div>
                        <div class="collapsed-content">
                            <div class="footer-newsletter">
                                <form action="#">
                                    <div class="form-group">
                                        <input
                                                type="text" class="form-control form-control--sm"
                                                placeholder="ایمیل خود را وارد کنید"
                                        >
                                    </div>
                                    <div class="form-group">
                                        <button class="btn w-100">حالا عضو
                                                                  شوید!
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row vert-margin-middle">
                <div class="col-sm footer-bottom-col-left">
                    <div class="footer-logo">
                        <a href="index.html">
                            <img
                                    class="lazyload fade-up"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-srcset="images/logo-footer.webp 1x, images/logo-footer2x.webp 2x"
                                    alt="Logo"
                            >
                        </a>
                    </div>
                </div>
                <div class="col-sm footer-bottom-col-right">
                    <ul class="payment-link payment-link--sm">
                        <li>
                            <i class="icon-amazon-logo"></i>
                        </li>
                        <li>
                            <i class="icon-visa-pay-logo"></i>
                        </li>
                        <li>
                            <i class="icon-skrill-logo"></i>
                        </li>
                        <li>
                            <i class="icon-master-card-logo"></i>
                        </li>
                        <li>
                            <i class="icon-paypal-logo"></i>
                        </li>
                        <li>
                            <i class="icon-apple-pay-logo"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="footer-sticky">
    <div class="sticky-addcart js-stickyAddToCart closed">
        <div class="container">
            <div class="row">
                <div class="col-auto sticky-addcart_image">
                    <a href="product.html">
                        <img src="images/skins/fashion/products/product-01-1.webp" alt=""/>
                    </a>
                </div>
                <div class="col col-sm-5 col-lg-4 col-xl-5 sticky-addcart_info">
                    <h1 class="sticky-addcart_title">شلوار چرمی</h1>
                    <div class="sticky-addcart_price">
                        <span class="sticky-addcart_price--actual">180,000 تومان</span>
                        <span class="sticky-addcart_price--old">210,000 تومان</span>
                    </div>
                </div>
                <div class="col-auto sticky-addcart_options  prd-block prd-block_info--style1">
                    <div class="select-wrapper">
                        <select class="form-control form-control--sm">
                            <option value="">-- لطفا یک گزینه را انتخاب کنید --</option>
                        </select>
                    </div>
                </div>
                <div class="col-auto sticky-addcart_actions">
                    <div class="prd-block_qty">
                        <span class="option-label">تعداد : </span>
                        <div class="qty qty-changer">
                            <button class="decrease"></button>
                            <input type="number" class="qty-input" value="1" data-min="1" data-max="1000">
                            <button class="increase"></button>
                        </div>
                    </div>
                    <div class="btn-wrap">
                        <button class="btn js-prd-addtocart" data-fancybox data-src="#modalCheckOut">افزودن به سبد
                                                                                                     خرید
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="popup-addedtocart js-popupAddToCart closed" data-close="50000">
        <div class="container">
            <div class="row">
                <div class="popup-addedtocart-close js-popupAddToCart-close">
                    <i class="icon-close"></i>
                </div>
                <div class="popup-addedtocart-cart js-open-drop" data-panel="#dropdnMinicart">
                    <i
                            class="icon-basket"
                    ></i>
                </div>
                <div class="col-auto popup-addedtocart_logo">
                    <img
                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-src="images/logo-white-sm.webp" class="lazyload fade-up" alt=""
                    >
                </div>
                <div class="col popup-addedtocart_info">
                    <div class="row">
                        <a href="product.html" class="col-auto popup-addedtocart_image">
								<span class="image-container w-100">
									<img src="images/skins/fashion/products/product-01-1.webp" alt=""/>
								</span>
                        </a>
                        <div class="col popup-addedtocart_text">
                            <a href="product.html" class="popup-addedtocart_title"></a>
                            <span class="popup-addedtocart_message">افزودن به <a
                                        href="cart.html"
                                        class="underline"
                                >سبد
										خرید</a></span>
                            <span class="popup-addedtocart_error_message"></span>
                        </div>
                    </div>
                </div>
                <div class="col-auto popup-addedtocart_actions">
                    <span>شما می توانید ادامه دهید به</span>
                    <a
                            href="#" class="btn btn--grey btn--sm js-open-drop"
                            data-panel="#dropdnMinicart"
                    >
                        <i class="icon-basket"></i>
                        <span>خرید</span>
                    </a>
                    <span>یا</span>
                    <a href="checkout.html" class="btn btn--invert btn--sm">
                        <i
                                class="icon-envelope-1"
                        ></i>
                        <span>پرداخت</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-addcart popup-selectoptions js-popupSelectOptions closed" data-close="500000">
        <div class="container">
            <div class="row">
                <div class="popup-selectoptions-close js-popupSelectOptions-close">
                    <i class="icon-close"></i>
                </div>
                <div class="col-auto sticky-addcart_image sticky-addcart_image--zoom">
                    <a href="#" data-caption="">
                        <span class="image-container"><img src="#" alt=""/></span>
                    </a>
                </div>
                <div class="col col-sm-5 col-lg-4 col-xl-5 sticky-addcart_info">
                    <h1 class="sticky-addcart_title">
                        <a href="#">&nbsp;</a>
                    </h1>
                    <div class="sticky-addcart_price">
                        <span class="sticky-addcart_price--actual"></span>
                        <span class="sticky-addcart_price--old"></span>
                    </div>
                    <div class="sticky-addcart_error_message">پیغام خطا</div>
                </div>
                <div class="col-auto sticky-addcart_options prd-block prd-block_info--style1">
                    <div class="select-wrapper">
                        <select class="form-control form-control--sm sticky-addcart_options_select">
                            <option value="none">لطفا یک گزینه را انتخاب کنید ...
                            </option>
                        </select>
                        <div class="invalid-feedback">نمی تواند خالی باشد</div>
                    </div>
                </div>
                <div class="col-auto sticky-addcart_actions">
                    <div class="prd-block_qty">
                        <span class="option-label">تعداد : </span>
                        <div class="qty qty-changer">
                            <button class="decrease"></button>
                            <input type="number" class="qty-input" value="2" data-min="1" data-max="10000">
                            <button class="increase"></button>
                        </div>
                    </div>
                    <div class="btn-wrap">
                        <button class="btn js-prd-addtocart">افزودن به سبد خرید</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="back-to-top js-back-to-top compensate-for-scrollbar" href="#" title="Scroll To Top">
        <i class="icon icon-angle-up"></i>
    </a>
    <div class="loader-horizontal js-loader-horizontal">
        <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 100%"></div>
        </div>
    </div>
</div>
<div class="footer-sticky">
    <div
            class="payment-notification-wrap js-pn" data-visible-time="3000" data-hidden-time="3000" data-delay="500"
            data-from="تهران ,مشهد ,تبریز ,مازندران ,شیراز"
            data-products='[{"productname":"شلوار چرمی", "productlink":"product.html","productimage":"images/skins/fashion/products/product-01-1.webp"},{"productname":"کوله پشتی پارچه ای مشکی", "productlink":"product.html","productimage":"images/skins/fashion/products/product-28-1.webp"},{"productname":"کفش های کتانی", "productlink":"product.html","productimage":"images/skins/fashion/products/product-23-1.webp"}]'
    >
        <div class="payment-notification payment-notification--squared">
            <div class="payment-notification-inside">
                <div class="payment-notification-container">
                    <a href="#" class="payment-notification-image js-pn-link">
                        <img src="images/products/product-01.webp" class="js-pn-image" alt="">
                    </a>
                    <div class="payment-notification-content-wrapper">
                        <div class="payment-notification-content">
                            <div class="payment-notification-text">دیگران خریداری کردند
                            </div>
                            <a href="product.html" class="payment-notification-name js-pn-name js-pn-link">ساعت
                                                                                                           اپل
                            </a>
                            <div class="payment-notification-bottom">
                                <div class="payment-notification-when">
                                    <span class="js-pn-time">32</span>
                                    دقیقه پیش
                                </div>
                                <div class="payment-notification-from">از
                                    <span class="js-pn-from">تهران</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="payment-notification-close">
                    <i class="icon-close-bold"></i>
                </div>
                <div
                        class="payment-notification-qw prd-hide-mobile js-prd-quickview"
                        data-src="ajax/ajax-quickview.html"
                >
                    <i class="icon-eye"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/shop/js/vendor-special/lazysizes.min.js"></script>
<script src="/shop/js/vendor-special/ls.bgset.min.js"></script>
<script src="/shop/js/vendor-special/ls.aspectratio.min.js"></script>
<script src="/shop/js/vendor-special/jquery.min.js"></script>
<script src="/shop/js/vendor-special/jquery.ez-plus.js"></script>
<script src="/shop/js/vendor/vendor.min.js"></script>
<script src="/shop/js/app-html.js"></script>
</body>

</html>