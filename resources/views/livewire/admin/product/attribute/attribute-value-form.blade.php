<form wire.submit.prevent="$action">
    <div class="modal-header">
        @if($action == 'create')
            <h5 class="modal-title" id="modalHeader">
                <i class="fas fa-plus mr-3"></i>
                افزودن مقدار ویژگی جدید
            </h5>
        @else
            <h5 class="modal-title" id="modalHeader">در حال ویرایش مقدار ویژگی</h5>
        @endif
        <button wire:click="clearAttributeValue" type="button" class="close" data-dismiss="modal" aria-label="نزدیک">
            <i aria-hidden="true" class="ki ki-close"></i>
        </button>
    </div>
    <div class="modal-body">
        <div class="form-row">
            <div class="col-12">
                <x-admin.form.input wire:model="attributeValue.name" label="نام مقدار ویژگی"/>
            </div>
            <div class="col-12">
                <x-admin.form.input wire:model="attributeValue.label" label="نام مقدار ویژگی"/>
            </div>
            @if($attribute->style == 'color')
                <div class="col-12">
                    <input wire:model="attributeValue.color" class="form-control" type="color">
                </div>
            @endif
        </div>
        <div class="separator separator-dashed my-7"></div>
        <div class="row">
            @if($attribute->style == 'image')
                <div class="col-6">
                    <label class='btn btn-light-primary'>
                        عکس ویژگی
                        <input hidden wire:model="image" class="form-control" type="file">
                    </label>
                </div>
                <div class="col-6 rounded-lg">
                    @if(!is_null($image))
                        <img class="rounded-lg" src="{{ $image->temporaryUrl() }}" alt="" width="80px" height="80px">
                    @endif
                    @if($attributeValue->image && is_null($image))
                        <img class="rounded-lg" src="{{ asset($attributeValue->image) }}" alt="" width="80px" height="80px">
                    @endif
                </div>
            @endif
        </div>
    </div>
    <div class="modal-footer">
        <button
                wire:click="clearAttributeValue" type="button" class="btn btn-light-primary font-weight-bold"
                data-dismiss="modal"
        >بستن
        </button>
        @if($action == 'create')
            <button wire:click="addAttributeValue" type="button" class="btn btn-primary font-weight-bold">افزودن مقدار
                                                                                                          ویژگی
            </button>
        @else
            <button wire:click="updateAttributeValue" type="button" class="btn btn-primary font-weight-bold">ذخیره
                                                                                                             تغییرات
            </button>
        @endif
    </div>
</form>

