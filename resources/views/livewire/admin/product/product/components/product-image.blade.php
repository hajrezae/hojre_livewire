<x-admin.card.simple class="rounded-lg" title="عکس شاخص محصول">
    <x-slot name="toolbar">
        <label class="btn btn-icon btn-light-primary">
            <input hidden wire:model="product_image" type="file">
            <i class="fas fa-camera"></i>
        </label>
    </x-slot>
    <x-slot name="body">
        @if(!$product->image_url)
            <div class="text-muted p-5">
                بدون عکس
            </div>
        @else
            <img class="rounded-lg" src="{{ $product_image != null ? $product_image->temporaryUrl() : asset($product->image_url) }}" alt="" width="100%" height="100%">
        @endif
    </x-slot>
</x-admin.card.simple>
