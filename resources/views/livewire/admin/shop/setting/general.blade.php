<div id="setting-general-tab-content" class="py-5">
    <h4>اطلاعات کلی فروشگاه</h4>
    <div class="separator separator-dashed my-7"></div>
    <form wire:submit.prevent="saveSettings">
        <div class="row">
            <div class="col-12 col-md-4">
                <x-admin.form.input wire:model.defer="shop_name" label="اسم فروشگاه"/>
            </div>
            <div class="col-12 col-md-4">
                <x-admin.form.input wire:model.defer="admin_url" label="آدرس پنل ادمین" />
            </div>
            <div class="col-12 col-md-4">
                <x-admin.form.input wire:model.defer="admin_url" label="آدرس پنل ادمین" />
            </div>
        </div>

    </form>

</div>
