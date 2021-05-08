<form wire.submit.prevent="$action">
    <div class="modal-content">
        <div class="modal-header">
            @if($action == 'create')
                <h5 class="modal-title" id="modalHeader">
                    <i class="fas fa-plus mr-3"></i>
                    افزودن دسته بندی جدید
                </h5>
            @else
                <h5 class="modal-title" id="modalHeader">در حال ویرایش دسته بندی</h5>
            @endif
            <button wire:click="clearCategory" type="button" class="close" data-dismiss="modal" aria-label="نزدیک">
                <i aria-hidden="true" class="ki ki-close"></i>
            </button>
        </div>
        <div class="modal-body">
            <div class="form-row">
                <div class="col-12">
                    <x-admin.form.input wire:model="category.slug" label="{{ __('model/category.slug') }}"/>
                </div>
                <div class="col-12">
                    <x-admin.form.input wire:model="category.label" label="{{ __('model/category.label') }}"/>
                </div>
                <div class="col-12">
                    <x-admin.form.select wire:model="category.parent_id" id="categoriesList" label="{{ __('model/category.parent_id') }}">
                        <option value=0>بدون دسته بندی مادر</option>
                        @include('admin.pages.product.category.category-option', ['categories' => \App\Models\Product\Category::where('parent_id', 0)->get()])
                    </x-admin.form.select>
                </div>
                <div class="col-12">
                    <x-admin.form.textarea wire:model="category.description" rows="6" label="{{ __('model/category.description') }}"/>
                </div>
            </div>
            <div class="separator separator-dashed my-5"></div>
            <div class="col-12">
                <label for="">تصویر شاخص دسته بندی</label>
            </div>
        </div>
        <div class="modal-footer">
            <button wire:click="clearCategory" type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">بستن</button>
            @if($action == 'create')
                <button wire:click="addCategory" type="button" class="btn btn-primary font-weight-bold">افزودن دسته بندی</button>
            @else
                <button wire:click="updateCategory" type="button" class="btn btn-primary font-weight-bold">ذخیره تغییرات</button>
            @endif
        </div>
    </div>
</form>

