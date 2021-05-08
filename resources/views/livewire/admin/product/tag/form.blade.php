<div class="tagForm-content">
    <form wire:submit.prevent="{{$action}}">
        <div class="modal-header">
            @if($action == 'create')
                <h5>
                    <i class="fas fa-plus mr-3"></i>
                    افزودن تگ
                </h5>
            @else
                <h5>
                    <i class="fas fa-pen mr-3"></i>
                    ویرایش تگ
                </h5>
            @endif
            <button wire:click="clearTag" type="button" class="close" data-dismiss="modal">
                <i aria-hidden="true" class="ki ki-close"></i>
            </button>
        </div>
        <div class="modal-body">
            <div class="form-row">
                <div class="col-12">
                    <x-admin.form.input wire:model="tag.name" type="text" label="{{__('model/tag.name')}}"/>
                    <x-admin.form.input wire:model="tag.label" type="text" label="{{__('model/tag.label')}}"/>
                    <x-admin.form.textarea wire:model="tag.description" type="text" label="{{__('model/tag.description')}}" rows="7"/>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button wire:click="clearTag" type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">بستن</button>
            @if($action == 'create')
                <button wire:click="create" type="button" class="btn btn-primary font-weight-bold">افزودن تگ</button>
            @else
                <button wire:click="update" type="button" class="btn btn-primary font-weight-bold">ذخیره تغییرات</button>
            @endif
        </div>
    </form>
</div>
