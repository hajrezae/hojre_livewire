@extends('shop.layouts.main')

@section('content')
    <div class="holder mt-0 py-3 py-lg-4">
        <div class="container">
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
                <h2 class="h1-style">دسته بندی ها</h2>
            </div>
            <x-shop.product.collectionGrid :categories="null" />
        </div>
    </div>
    <div class="holder">
        <div class="container mb-4">
            <hr>
        </div>
        <div class="container">
            <x-shop.product.product-slider title="جدید ترین محصولات" :products="\App\Models\Product\Product::take(10)->get()" />
        </div>
    </div>
    <div class="holder">
        <div class="container">
            <x-shop.common.services />
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
@endsection