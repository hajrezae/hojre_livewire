<x-admin.card.simple title="متغییر های محصول" class="tab-pane fade rounded-lg {{ $this->active === true ? 'show active' : null }}"
                     id="product-variations"
                     role="tabpanel" aria-labelledby="product-info"
                     wire:loading.class="overlay overlay-block"
                     wire:target="saveVariations"
>
    <x-slot name="toolbar">
        <button type="submit" wire:click="createVariations" class="btn btn-light-primary mx-4" {{ $this->product->attribute->isEmpty() ? 'disabled' : null}}>
            <i class="fas fa-plus"></i>
            ساخت متغییر های محصول
        </button>
    </x-slot>
    <x-slot name="body">
        <form wire:submit.prevent="save" id="save-product-variations-form">
            <div class="form-row">
                <div class="col-12">
                    @if($variations->isNotEmpty())
                        @foreach($variations as $variation)
                            {{ $variation->id }}
                        @endforeach
                    @endif
                </div>
            </div>
        </form>
        <div wire:loading.class.remove="d-none" wire:target="saveVariations" class="overlay-layer bg-dark-o-10 d-none rounded-lg">
            <div class="spinner spinner-primary"></div>
        </div>
    </x-slot>
</x-admin.card.simple>
@section('scripts')

@endsection







