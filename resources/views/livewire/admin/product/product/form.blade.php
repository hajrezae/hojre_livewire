<div id="product-form">
    <x-admin.common.back-button route="admin.product.index"
                                text="محصولات"/>
    <livewire:admin.product.product.components.product-basic-info :product="$product"/>
    <div class="row mt-5">
        <div class="col-12 col-md-9">
            <div class="product-info-sections">
                <div class="row">
                    <div class="col-12 col-md-2">
                        <livewire:admin.product.product.components.nav-menu-list :product="$product"/>

                    </div>
                    <div class="col-12 col-md-10">
                        <div class="tab-content"
                             id="myTabContent5">
                            <livewire:admin.product.product.components.product-info :product="$product"/>
                            <livewire:admin.product.product.components.product-supplier :product="$product"/>
                            <livewire:admin.product.product.components.product-price :product="$product"/>
                            {{--                            <livewire:admin.product.product.components.product-inventory :product="$product"/>--}}
                            {{--                            <livewire:admin.product.product.components.product-attributes :product="$product"/>--}}
                            {{--                            <livewire:admin.product.product.components.product-variations :product="$product"/>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <livewire:admin.product.product.components.product-image :product="$product"/>
            <livewire:admin.product.product.components.product-image-gallery :product="$product"/>
        </div>
    </div>
</div>
