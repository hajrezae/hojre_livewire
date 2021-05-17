<div id="category-page">
    @section('page_title', $page_title)
    <div class="holder">
        <div class="container">
            <livewire:shop.category.category-title :category="$category" />
            <livewire:shop.category.category-filter :category="$category" />
            <div class="row">
                <livewire:shop.category.aside-filters :category="$category" />
                <div class="filter-toggle js-filter-toggle">
                    <div class="loader-horizontal js-loader-horizontal">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 100%"></div>
                        </div>
                    </div>
                    <span class="filter-toggle-icons js-filter-btn"><i class="icon-filter"></i><i class="icon-filter-close"></i></span>
                    <span class="filter-toggle-text"><a href="#" class="filter-btn-open js-filter-btn">اصلاح و مرتب
								سازی</a><a href="#" class="filter-btn-close js-filter-btn">بازنشانی</a><a href="#" class="filter-btn-apply js-filter-btn">اعمال و
								بستن</a></span>
                </div>
                <livewire:shop.category.products-list :category="$category" />
            </div>
        </div>
    </div>
</div>