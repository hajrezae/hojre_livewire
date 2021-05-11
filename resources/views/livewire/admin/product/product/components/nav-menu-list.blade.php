<ul class="nav flex-column nav-pills bg-white p-2 rounded-lg">
    <li class="nav-item mb-2">
        <a class="nav-link active"
           id="product-info-tab"
           data-toggle="tab"
           href="#product-info"
           @click="active = 'product-info'"
        >
            <span class="nav-icon">
                <i class="flaticon2-layers"></i>
            </span>
            <span class="nav-text">
                کلی
            </span>
        </a>
    </li>
    <li class="nav-item mb-2">
        <a class="nav-link"
           id="product-price-tab"
           data-toggle="tab"
           href="#product-price"
           aria-controls="product-price">
            <span class="nav-icon">
                <i class="fas fa-money-bill"></i>
            </span>
            <span class="nav-text">
                قیمت
            </span>
        </a>
    </li>
    <li class="nav-item mb-2">
        <a class="nav-link"
           id="product-supplier-tab"
           data-toggle="tab"
           href="#product-supplier"
           aria-controls="product-supplier">
            <span class="nav-icon">
                <i class="fas fa-user-tie"></i>
            </span>
            <span class="nav-text">
                تامین
                کننده
            </span>
        </a>
    </li>
    @if($product->type == 'variable')
        <li class="nav-item mb-2">
            <a class="nav-link"
               id="product-inventory-tab"
               data-toggle="tab"
               href="#product-inventory"
               aria-controls="product-price">
                <span class="nav-icon">
                    <i class="fas fa-dolly-flatbed"></i>
                </span>
                <span class="nav-text">
                    انبار
                </span>
            </a>
        </li>
    @endif
    @if($product->type == 'variable')
        <li class="nav-item mb-2">
            <a class="nav-link"
               id="product-attributes-tab"
               data-toggle="tab"
               href="#product-attributes"
               aria-controls="product-price">
                <span class="nav-icon">
                    <i class="fas fa-brush"></i>
                </span>
                <span class="nav-text">
                    ویژگی
                    ها
                </span>
            </a>
        </li>
    @endif
    @if($product->type == 'variable')
        <li class="nav-item mb-2">
            <a class="nav-link"
               id="product-attributes-tab"
               data-toggle="tab"
               href="#product-variations"
               aria-controls="product-price">
                <span class="nav-icon">
                    <i class="flaticon-squares-1"></i>
                </span>
                <span class="nav-text">
                    متغییر
                    ها
                </span>
            </a>
        </li>
    @endif
</ul>