<div class="filter-row" id="category-filter">
    <div class="row">
        <div class="items-count">{{ $category->products()->count() }} مورد (ها)</div>
        <div class="select-wrap d-none d-md-flex">
            <div class="select-label">مرتب سازی بر اساس : </div>
            <div class="select-wrapper select-wrapper-xxs">
                <select class="form-control input-sm">
                    <option value="featured">جدیدترین محصولات</option>
                    <option value="rating">امتیاز محصولات</option>
                    <option value="price">بهترین قیمت</option>
                </select>
            </div>
        </div>
        <div class="select-wrap d-none d-md-flex">
            <div class="select-label">تعداد نمایش : </div>
            <div class="select-wrapper select-wrapper-xxs">
                <select class="form-control input-sm">
                    <option value="featured">12</option>
                    <option value="rating">36</option>
                    <option value="price">100</option>
                </select>
            </div>
        </div>
        <div class="viewmode-wrap">
            <div class="view-mode">
                <span class="js-horview d-none d-lg-inline-flex"><i class="icon-grid"></i></span>
                <span class="js-gridview active"><i class="icon-grid"></i></span>
                <span class="js-listview"><i class="icon-list"></i></span>
            </div>
        </div>
    </div>
</div>
