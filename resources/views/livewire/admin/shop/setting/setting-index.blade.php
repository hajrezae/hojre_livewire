<div id="shop-setting-page" class="row justify-content-center">
    <div class="col-8 bg-white p-5 rounded-lg">
        <ul class="nav nav-light-primary nav-pills" id="myTab3" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="general-tab" data-toggle="tab" href="#setting-general">
                    <span class="nav-icon"><i class="fas fa-list"></i></span>
                    <span class="nav-text">عمومی</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="shop-tab" data-toggle="tab" href="#setting-shop">
                    <span class="nav-icon"><i class="fas fa-store"></i></span>
                    <span class="nav-text">فروشگاه</span>
                </a>
            </li>
        </ul>
        <div class="tab-content mt-5" id="shop-settings-tab">
            <div class="tab-pane fade active show" id="setting-general" role="tabpanel" aria-labelledby="general-tab">
                <livewire:admin.shop.setting.general />
            </div>
            <div class="tab-pane fade" id="profile-3" role="tabpanel" aria-labelledby="profile-tab-3">محتوای دو</div>
            <div class="tab-pane fade" id="مخاطب-3" role="tabpanel" aria-labelledby="مخاطب-tab-3">محتوا سه</div>
        </div>
    </div>
</div>