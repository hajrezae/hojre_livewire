<x-admin.card.simple class="mt-5 rounded-lg" title="گالری محصول">
    <x-slot name="toolbar">
        <label class="btn btn-icon btn-light-primary">
            <input hidden wire:model="gallery_images" type="file" multiple>
            <i class="fas fa-camera"></i>
        </label>
    </x-slot>
    <x-slot name="body">
        <div class="row">
            @if(!is_null($gallery_images))
                @foreach($gallery_images as $i => $image)
                    <div class="col-4 mt-3">
                        <div class="position-relative">
                            <img class="rounded-lg" src="{{ $image->temporaryUrl() }}" alt="" width="100px" height="100px">
                            <i wire:click="deleteTempImage('{{ $i }}')" class="flaticon-close text-danger position-absolute cursor-pointer font-weight-boldest rounded-circle fa-2x"
                            style="left: -20%; top:-10%"
                            ></i>
                        </div>
                    </div>
                @endforeach
            @elseif(!is_null($product->image_gallery))
                @foreach(unserialize($product->image_gallery) as $image)
                    <div class="col-4 mt-3">
                        <div class="position-relative">
                            <img class="rounded-lg" src="{{ asset($image) }}" alt="" width="100px" height="100px">
                            <i wire:click="deleteImage('{{ $image }}')" class="flaticon-close text-danger position-absolute cursor-pointer font-weight-boldest rounded-circle fa-2x"
                               style="left: -20%; top:-10%"
                            ></i>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-12 text-center">
                    <h4>عکسی وجود ندارد</h4>
                </div>
            @endif
        </div>
    </x-slot>
</x-admin.card.simple>

