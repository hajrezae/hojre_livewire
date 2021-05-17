<x-admin.card.simple
        title="متغییر های محصول" class="rounded-lg"
        id="product-variations"
        role="tabpanel" aria-labelledby="product-info"
        wire:loading.class="overlay overlay-block"
        wire:target="createVariations"
>
    <x-slot name="toolbar">
        <button
                type="submit" wire:click="createVariations"
                class="btn btn-light-primary mx-4" {{ $this->product->attributes->isEmpty() ? 'disabled' : null}}>
            <i class="fas fa-plus"></i>
            ساخت متغییر های محصول
        </button>
    </x-slot>
    <x-slot name="body">
        <div class="accordion accordion-solid accordion-toggle-plus" id="product-variations-list">
            @foreach($productVariants as $variant)
                <div class="card">
                    <div class="card-header" id="headingیک6">
                        <div
                                class="card-title collapsed" data-toggle="collapse" data-target="#variant-{{$variant[0]->variant_id}}"
                                aria-expanded="false"
                        >
                            <i class="flaticon2-grids"></i>
                            {{ $loop->iteration }}
                            @foreach($variant as $variantValue)
                                {{ $variantValue->attributeValue->label }} @if(!$loop->last) +  @endif
                            @endforeach
                        </div>
                    </div>
                    <div id="variant-{{$variant[0]->variant_id}}" class="collapse" data-parent="#product-variations-list" style="">
                        <div class="card-body">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div
                wire:loading.class.remove="d-none"
                class="overlay-layer bg-dark-o-10 d-none rounded-lg"
        >
            <div class="spinner spinner-primary"></div>
        </div>
    </x-slot>
</x-admin.card.simple>








