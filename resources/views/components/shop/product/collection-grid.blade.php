@props(['categories', 'name'])
<div class="collection-grid-2">
    @foreach($categories as $category)
        <div class="collection-grid-2-item col-9 col-md-quarter col-lg-3">
            <a href="{{ route('shop.category', $category) }}" class="bnr-wrap collection-grid-2-item-inside">
                <div
                        class="collection-grid-2-img image-hover-scale image-container"
                        style="padding-bottom: 77.78%"
                >
                    <img
                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-src="{{ $category->image ?? "/shop/images/categories/category-img-0". rand(1, 9) .".webp" }}"
                            class="lazyload fade-up"
                            alt=""
                    >
                </div>
                <h3 class="collection-grid-2-title">{{ $category->label }}</h3>
            </a>
        </div>
    @endforeach
</div>