<div id="single-product-page">
    @section('page_title', $product->name ?? $product->slug)
    <div class="holder breadcrumbs-wrap mt-0">
        <div class="container">
            <ul class="breadcrumbs">
                <li>
                    <a href="index.html">خانه</a>
                </li>
                <li>
                    <a href="category.html">زنانه</a>
                </li>
                <li>
                    <span>شلوار چرمی</span>
                </li>
            </ul>
        </div>
    </div>

    //Main Content
    <div class="holder">
        <div class="container js-prd-gallery" id="prdGallery">
            <div class="row prd-block prd-block-under prd-block--prv-bottom">
                <div class="col">
                    <div class="js-prd-d-holder">
                        <div class="prd-block_title-wrap">
                            <div
                                    class="prd-block_reviews" data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title="پیمایش به نظرات"
                            >
                                <i class="icon-star-fill fill"></i>
                                <i class="icon-star-fill fill"></i>
                                <i class="icon-star-fill fill"></i>
                                <i class="icon-star-fill fill"></i>
                                <i class="icon-star"></i>
                                <span class="reviews-link"><a href="#" class="js-reviews-link"> (بر اساس 17
											رأی)</a></span>
                            </div>
                            <h1 class="prd-block_title">{{ $product->name }}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-auto prd-block-prevnext-wrap">
                    <div class="prd-block-prevnext">
                        @if($prevProduct)
                            <a href="{{ route('shop.product', $prevProduct) }}">
                            <span class="prd-img"><img
                                        class="fade-up lazyloaded"
                                        src="{{$prevProduct->image_url}}"
                                        data-src="{{ $prevProduct->image_url }}" alt=""
                                ><i class="icon-arrow-right"></i></span>
                            </a>
                        @endif
                        @if($nextProduct)
                            <a href="{{ route('shop.product', $nextProduct) }}">
                            <span class="prd-img"><img
                                        class="fade-up ls-is-cached lazyloaded"
                                        src="{{ $nextProduct->image_url }}"
                                        data-src="{{ $nextProduct->image_url }}" alt=""
                                ><i class="icon-arrow-left"></i></span>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row prd-block prd-block--prv-bottom">
                <div class="col-md-8 col-lg-8 col-xl-8 aside--sticky js-sticky-collision bg-light py-2 rounded-sm">
                    <div class="aside-content">
                        <div class="mb-2 js-prd-m-holder"></div>
                        <div class="prd-block_main-image">
                            <div class="prd-block_main-image-holder" id="prdMainImage">
                                <div
                                        class="product-main-carousel js-product-main-carousel"
                                        data-zoom-position="inner"
                                >
                                    <div data-value="Main"><span class="prd-img"><img
                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                    data-src="{{ $product->image_url }}"
                                                    class="lazyload fade-up elzoom" alt=""
                                                    data-zoom-image="{{ $product->image_url }}"
                                            /></span>
                                    </div>
                                </div>
                                <div class="prd-block_label-sale-squared justify-content-center align-items-center">
                                    <span>فروش ویژه</span>
                                </div>
                            </div>
                            <div class="prd-block_main-image-links">
                                <a
                                        data-fancybox data-width="900" href="images/video/product.mp4"
                                        class="prd-block_video-link"
                                >
                                    <i class="icon-video"></i>
                                </a>
                                <a href="images/products//product-01.webp" class="prd-block_zoom-link">
                                    <i
                                            class="icon-zoom-in"
                                    ></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-previews-wrapper">
                            <div class="product-previews-carousel js-product-previews-carousel">
                                @if($product->image_gallery && !empty(unserialize($product->image_gallery)))
                                    @foreach(unserialize($product->image_gallery) as $image)
                                        <a href="#" data-value="Main"><span class="prd-img"><img
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="/{{ $image }}"
                                                        class="lazyload fade-up" alt=""
                                                /></span>
                                        </a>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 col-lg-10 col-xl-10 mt-1 mt-md-0">
                    <div
                            class="prd-block_info prd-block_info--style1"
                            data-prd-handle="{{ $product->product_url }}"
                    >
                        <div class="prd-block_info-top prd-block_info_item order-0 order-md-2">
                            <div class="prd-block_price prd-block_price--style2">
                                @if($product->discount_price)
                                    <div class="prd-block_price--actual text-success font-weight-boldest">{{ $product->getDiscountPrice() }}
                                        تومان
                                    </div>
                                    <div class="prd-block_price-old-wrap">
										<span class="prd-block_price--old">{{ $product->getRegularPrice() }}
											تومان</span>
                                        <span class="prd-block_price--text">ذخیره شما :
											{{ $product->priceDiff() }} تومان ({{ $product->discountPercent() }}%)</span>
                                    </div>
                                @else
                                    <div class="prd-block_price--actual">{{ $product->getRegularPrice() }} تومان</div>
                                @endif
                            </div>
                            <hr/>
                            <div class="prd-block_viewed-wrap d-none d-md-flex">
                                <div class="prd-block_viewed">
                                    <i class="icon-time"></i>
                                    <span>این محصول در یک ساعت گذشته {{ rand(38, 500) }} مرتبه مشاهده شده
											است</span>
                                </div>
                            </div>
                        </div>
                        <div class="prd-progress prd-block_info_item" data-left-in-stock="">
                            <div class="prd-progress-text">
                                عجله کنید!
                                <span class="prd-progress-text-left js-stock-left">21</span>
                                موجودی در انبار
                            </div>
                            <div class="prd-progress-text-null"></div>
                            <div class="prd-progress-bar-wrap progress">
                                <div
                                        class="prd-progress-bar progress-bar active"
                                        data-stock="50, 10, 30, 25, 1000, 15000" style="width: 42%;"
                                ></div>
                            </div>
                        </div>
                        <div class="prd-block_countdown js-countdown-wrap prd-block_info_item countdown-init">
                            <div class="countdown-box-full-text">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-sm-auto text-center">
                                        <div class="countdown js-countdown" data-countdown="2021/07/01">
                                            <span><span>43</span>روز</span>
                                            <span><span>21</span>ساعت</span>
                                            <span><span>16</span>دقیقه</span>
                                            <span><span>03</span>ثانیه</span>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="countdown-txt"> زمان باقی مانده
                                                                    تخفیف!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="prd-block_order-info prd-block_info_item " data-order-time="" data-locale="en">
                            <i class="icon-box-2"></i>
                            <div>زمانی باقی مانده تا تخفیف بعدی
                                <span
                                        class="prd-block_order-info-time countdownCircleTimer"
                                        data-time="8:00:00, 15:30:00, 23:59:59"
                                ><span><span>05</span>:</span><span><span>16</span>:</span><span><span>03</span></span></span>
                                 در تاریخ
                                <span data-date="">سه شنبه، 12 فرودین
										1400</span>
                            </div>
                        </div>
                        <div class="prd-block_info_item prd-block_info-when-arrives d-none" data-when-arrives="">
                            <div class="prd-block_links prd-block_links m-0 d-inline-flex">
                                <i class="icon-email-1"></i>
                                <div>
                                    <a
                                            href="#" data-follow-up="" data-name="Oversize Cotton Dress"
                                            class="prd-in-stock" data-src="#whenArrives"
                                    >هنگام رسیدن کالا به من
                                     اطلاع دهید
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="prd-block_info-box prd-block_info_item rounded-sm">
                            <div class="two-column">
                                <p>دسترسی :
                                    @if($product->stock > 0)
                                        <span class="prd-in-stock text-success" data-stock-status="">{{ $product->stock }} عدد موجود در انبار</span>
                                    @else
                                        <span class="prd-in-stock text-danger" data-stock-status="">ناموجود</span>
                                    @endif
                                </p>
                                <p class="prd-taxes">اطلاعات مالیاتی :
                                    <span>با احتساب مالیات</span>
                                </p>
                                <p>کالکشن :
                                    <span> <a
                                                href="collections.html" data-toggle="tooltip" data-placement="top"
                                                data-original-title="View all"
                                        >زنانه</a></span>
                                </p>
                                <p>شناسه کالا :
                                    <span data-sku="">FOXic-45812</span>
                                </p>
                                <p>فروشنده :
                                    <span class="text-success">{{ $product->has_supplier && $product->supplier_id ? $product->supplier->shop_name : 'تامین از انبار فروشگاه' }}</span>
                                </p>
                                <p>بارکد :
                                    <span>314363563</span>
                                </p>
                            </div>
                        </div>
                        <div class="order-0 order-md-100">
                            <form method="post" action="#">
                                <div class="prd-block_options">
                                    <div class="prd-color swatches">
                                        <div class="option-label">رنگ :</div>
                                        <select
                                                class="form-control hidden single-option-selector-modalQuickView"
                                                id="SingleOptionSelector-0" data-index="option1"
                                        >
                                            <option value="Beige" selected="selected">
                                                بژ
                                            </option>
                                            <option value="Black">مشکی</option>
                                            <option value="Red">قرمز</option>
                                        </select>
                                        <ul class="images-list js-size-list" data-select-id="SingleOptionSelector-0">
                                            <li class="active">
                                                <a
                                                        href="#" data-value="Beige" data-toggle="tooltip"
                                                        data-placement="top" data-original-title="بژ"
                                                >
                                                    <span class="image-container image-container--product"><img
                                                                src="images/skins/fashion/product-page/product-01.webp"
                                                                alt=""
                                                        ></span>
                                                </a>
                                            </li>
                                            <li>
                                            </li>
                                            <li>
                                                <a
                                                        href="#" data-value="Black" data-toggle="tooltip"
                                                        data-placement="top" data-original-title="مشکی"
                                                >
                                                    <span class="image-container image-container--product"><img
                                                                src="images/skins/fashion/product-page/product-04.webp"
                                                                alt=""
                                                        ></span>
                                                </a>
                                            </li>
                                            <li>
                                            </li>
                                            <li>
                                                <a
                                                        href="#" data-value="Red" data-toggle="tooltip"
                                                        data-placement="top" data-original-title="قرمز"
                                                >
                                                    <span class="image-container image-container--product"><img
                                                                src="images/skins/fashion/product-page/product-07.webp"
                                                                alt=""
                                                        ></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="prd-size swatches">
                                        <div class="option-label">سایز :</div>
                                        <select
                                                class="form-control hidden single-option-selector-modalQuickView"
                                                id="SingleOptionSelector-1" data-index="option2"
                                        >
                                            <option value="Small" selected="selected">
                                                کوچک
                                            </option>
                                            <option value="Medium">متوسط</option>
                                            <option value="Large">بزرگ</option>
                                        </select>
                                        <ul class="size-list js-size-list" data-select-id="SingleOptionSelector-1">
                                            <li class="active">
                                                <a href="#" data-value="Small">
                                                    <span class="value">کوچک</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-value="Medium">
                                                    <span class="value">متوسط</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-value="Large">
                                                    <span class="value">بزرگ</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="prd-block_actions prd-block_actions--wishlist">
                                    <div class="prd-block_qty">
                                        <div class="qty qty-changer">
                                            <button class="decrease js-qty-button"></button>
                                            <input
                                                    type="number" class="qty-input" name="quantity" value="1"
                                                    data-min="1" data-max="1000"
                                            >
                                            <button class="increase js-qty-button"></button>
                                        </div>
                                    </div>
                                    <div class="btn-wrap">
                                        <button
                                                class="btn btn--add-to-cart js-trigger-addtocart js-prd-addtocart"
                                                data-product="{&quot;name&quot;:  &quot;شلوار چرمی &quot;,  &quot;url &quot;: &quot;product.html&quot;,  &quot;path &quot;: &quot;images/skins/fashion/product-page/product-01.webp&quot;,  &quot;aspect_ratio &quot;: &quot;0.78&quot;}"
                                        >افزودن
                                         به سبد خرید
                                        </button>
                                    </div>
                                    <div class="btn-wishlist-wrap">
                                        <a
                                                href="#"
                                                class="btn-add-to-wishlist ml-auto btn-add-to-wishlist--add js-add-wishlist"
                                                title="افزودن به لیست علاقه مندی"
                                        >
                                            <i class="icon-heart-stroke"></i>
                                        </a>
                                        <a
                                                href="#"
                                                class="btn-add-to-wishlist ml-auto btn-add-to-wishlist--off js-remove-wishlist"
                                                title="حذف از لیست علاقه مندی"
                                        >
                                            <i class="icon-heart-hover"></i>
                                        </a>
                                    </div>
                                </div>
                            </form>
                            <div
                                    class="prd-block_agreement prd-block_info_item order-0 order-md-100 text-right"
                                    data-agree=""
                            >
                                <input
                                        id="agreementCheckboxProductPage" class="js-agreement-checkbox"
                                        data-button=".shopify-payment-agree" name="agreementCheckboxProductPage"
                                        type="checkbox"
                                >
                                <label for="agreementCheckboxProductPage">
                                    <a href="#" data-fancybox="" class="modal-info-link" data-src="#agreementInfo">من با
                                                                                                                   قوانین
                                                                                                                   و
                                                                                                                   مقررات
                                                                                                                   موافقت
                                                                                                                   می
                                                                                                                   کنم
                                    </a>
                                </label>
                            </div>
                        </div>
                        <div class="prd-block_description prd-block_info_item bg-light p-2 rounded-sm">
                            <h3>توضیحات کوتاه</h3>
                            <p>{{ $product->short_description ?? '-' }}</p>
                            <hr class="my-2"/>
                            <div class="mt-1"></div>
                            <div class="row vert-margin-less">
                                <div class="col-sm">
                                    <ul class="list-marker">
                                        <li>100% پلی استر</li>
                                        <li>پوشش: 100٪ ویسکوز</li>
                                    </ul>
                                </div>
                                <div class="col-sm">
                                    <ul class="list-marker">
                                        <li>خشک تمیز نکنید</li>
                                        <li>فقط غیر کلر</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="prd-block_info_item">
                            <ul class="prd-block_links list-unstyled">
                                <li>
                                    <i class="icon-size-guide"></i>
                                    <a href="#" data-fancybox="" class="modal-info-link" data-src="#sizeGuide">راهنمای
                                                                                                               سایز
                                    </a>
                                </li>
                                <li>
                                    <i class="icon-delivery-1"></i>
                                    <a href="#" data-fancybox="" class="modal-info-link" data-src="#deliveryInfo">ارسال
                                                                                                                  و
                                                                                                                  مرجوع
                                    </a>
                                </li>
                                <li>
                                    <i class="icon-email-1"></i>
                                    <a href="#" data-fancybox="" class="modal-info-link" data-src="#contactModal">پرسش
                                                                                                                  درباره
                                                                                                                  این
                                                                                                                  محصول
                                    </a>
                                </li>
                            </ul>
                            <div id="sizeGuide" style="display: none;" class="modal-info-content modal-info-content-lg">
                                <div class="modal-info-heading">
                                    <div class="mb-1">
                                        <i class="icon-size-guide"></i>
                                    </div>
                                    <h2>راهنمای سایز</h2>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-borderless text-center">
                                        <thead>
                                        <tr>
                                            <th>شماره سایز</th>
                                            <th>عرض شانه</th>
                                            <th>دور بازو</th>
                                            <th>قد آستین</th>
                                            <th>نیم تنه</th>
                                            <th>دور کمر</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>4</td>
                                            <td>8</td>
                                            <td>36</td>
                                            <td>7</td>
                                            <td>32"</td>
                                            <td>61 cm</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>10</td>
                                            <td>38</td>
                                            <td>11</td>
                                            <td>34"</td>
                                            <td>67 cm</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>12</td>
                                            <td>40</td>
                                            <td>15</td>
                                            <td>36"</td>
                                            <td>74 cm</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>14</td>
                                            <td>42</td>
                                            <td>17</td>
                                            <td>38"</td>
                                            <td>79 cm</td>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td>16</td>
                                            <td>44</td>
                                            <td>21</td>
                                            <td>40"</td>
                                            <td>84 cm</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div
                                    id="deliveryInfo" style="display: none;"
                                    class="modal-info-content modal-info-content-lg"
                            >
                                <div class="modal-info-heading">
                                    <div class="mb-1">
                                        <i class="icon-delivery-1"></i>
                                    </div>
                                    <h2>ارسال و مرجوع</h2>
                                </div>
                                <br>
                                <h5>خدمات پیک بسته ما</h5>
                                <p>فاکسیک مفتخر است خدمات استثنایی حمل و نقل بسته ای بین
                                   المللی را ارائه دهد. سازماندهی حمل و نقل بین المللی
                                   بسته ساده و آسان است. تیم خدمات مشتری ما بصورت شبانه
                                   روزی کار می کنند تا اطمینان حاصل کنند که از ابتدا تا
                                   انتها خدمات پیک با کیفیت بالا دریافت می کنید.</p>
                                <p>ارسال بسته با ما ساده است. برای شروع این فرآیند ابتدا
                                   باید با استفاده از خدمات نقل قول آنلاین رایگان ما
                                   قیمت دریافت کنید. از این طریق ، می توانید با انتخاب
                                   یک روش حمل و نقل مناسب برای خود ، از طریق فرم آنلاین
                                   حرکت کرده و تاریخ جمع آوری بسته خود را رزرو کنید.
                                </p>
                                <br>
                                <h5>زمان ارسال</h5>
                                <p>زمان ارسال براساس روش حمل و نقل شما انتخاب شده
                                   است.
                                    <br>
                                   تحویل EMS حدود 5-10 روز کاری طول می کشد.
                                    <br>
                                   تحویل DHL حدود 2-5 روز کاری طول می کشد.
                                    <br>
                                   تحویل DPEX حدود 2-8 روز کاری طول می کشد.
                                    <br>
                                   تحویل JCEX حدود 3-7 روز کاری طول می کشد.
                                    <br>
                                   پست الکترونیکی پست چین برای تحویل 20-40 روز کاری طول
                                   می کشد.
                                </p>
                            </div>
                            <div
                                    id="contactModal" style="display: none;"
                                    class="modal-info-content modal-info-content-sm"
                            >
                                <div class="modal-info-heading">
                                    <div class="mb-1">
                                        <i class="icon-envelope"></i>
                                    </div>
                                    <h2>سوالی دارید؟</h2>
                                </div>
                                <form
                                        method="post" action="#" id="contactForm" class="contact-form"
                                        novalidate="novalidate"
                                >
                                    <div class="form-group">
                                        <input
                                                type="text" name="contact[name]" class="form-control form-control--sm"
                                                placeholder="نام"
                                        >
                                    </div>
                                    <div class="form-group">
                                        <input
                                                type="text" name="contact[email]" class="form-control form-control--sm"
                                                placeholder="ایمیل" required=""
                                        >
                                    </div>
                                    <div class="form-group">
                                        <input
                                                type="text" name="contact[phone]" class="form-control form-control--sm"
                                                placeholder="شماره تماس"
                                        >
                                    </div>
                                    <div class="form-group">
                                        <textarea
                                                class="form-control textarea--height-170" name="contact[body]"
                                                placeholder="متن پیام" required=""
                                        >سلام! در مورد "لباس نخی بزرگ" به اطلاعات بعدی نیاز دارم:</textarea>
                                    </div>
                                    <button class="btn" type="submit">از مشاور ما سوال
                                                                      کنید
                                    </button>
                                    <p class="p--small mt-15 mb-0">و ما به زودی با شما
                                                                   تماس خواهیم گرفت</p>
                                    <input
                                            name="recaptcha-v3-token" type="hidden"
                                            value="03AGdBq27T8WvzvZu79QsHn8lp5GhjNX-w3wkcpVJgCH15Ehh0tu8c9wTKj4aNXyU0OLM949jTA4cDxfznP9myOBw9m-wggkfcp1Cv_vhsi-TQ9E_EbeLl33dqRhp2sa5tKBOtDspTgwoEDODTHAz3nuvG28jE7foIFoqGWiCqdQo5iEphqtGTvY1G7XgWPAkNPnD0B9V221SYth9vMazf1mkYX3YHAj_g_6qhikdQDsgF2Sa2wOcoLKWiTBMF6L0wxdwhIoGFz3k3VptYem75sxPM4lpS8Y_UAxfvF06fywFATA0nNH0IRnd5eEPnnhJuYc5LYsV6Djg7_S4wLBmOzYnahC-S60MHvQFf-scQqqhPWOtgEKPihUYiGFBJYRn2p1bZwIIhozAgveOtTNQQi7FGqmlbKkRWCA"
                                    >
                                </form>
                            </div>
                        </div>
                        <div class="prd-block_info_item">
                            <img
                                    class="img-responsive d-none d-sm-block lazyloaded"
                                    src="images/payment/safecheckout.webp" data-src="images/payment/safecheckout.webp"
                                    alt=""
                            >
                            <img
                                    class="img-responsive d-sm-none ls-is-cached lazyloaded"
                                    src="images/payment/safecheckout-m.webp"
                                    data-src="images/payment/safecheckout-m.webp" alt=""
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
