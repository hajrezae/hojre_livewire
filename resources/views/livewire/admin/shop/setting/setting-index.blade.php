<div id="shop-setting-page">
    <div class="row">
        <div class="col-2 bg-white rounded-lg py-4">
            <ul class="nav flex-column nav-pills">
                <li class="nav-item mb-2">
                    <a class="nav-link active"
                       id="setting-general-tab-5"
                       data-toggle="tab"
                       href="#setting-general">
                        <span class="nav-icon"><i
                               class="flaticon2-grids"></i></span>
                        <span class="nav-text">کلی</span>
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link"
                       id="setting-general-tab-5"
                       data-toggle="tab"
                       href="#setting-shop">
                        <span class="nav-icon"><i
                               class="fas fa-store"></i></span>
                        <span class="nav-text">فروشگاه</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-10">
            <div class="tab-content bg-white rounded-lg p-5"
                 id="myTabContent5">
                <div class="tab-pane fade show active"
                     id="setting-general"
                     role="tabpanel"
                     aria-labelledby="home-tab-5">
                    <livewire:admin.shop.setting.general />
                </div>
            </div>
        </div>
    </div>
</div>