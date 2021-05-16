<x-admin.card.simple
        title="محصولات مرتبط"
        class="rounded-lg"
        role="tabpanel"
        aria-labelledby="product-related"
        wire:loading.class="overlay overlay-block"
>
    <x-slot name="toolbar">
        <button
                type="submit"
                form="product-related-form"
                class="btn btn-light-primary"
        >
            <i class="fas fa-save"></i>
            ذخیره محصولات مرتبط
        </button>
    </x-slot>
    <x-slot name="body">
        <form
                wire:submit.prevent="saveProductRelated"
                id="product-related-form"
        >
            <div class="form-row">
                <div class="col-12">
                    <x-admin.form.input
                            input-type="group"
                            solid
                            wire:model="search"
                            label="جستجوی محصول مرتبط"
                            placeholder="جستجو بر اساس نام محصول و یا شناسه محصول..."
                    >
                        <x-slot name="prepend">
                            <i class="fas fa-search bg-white"></i>
                        </x-slot>
                    </x-admin.form.input>
                </div>
            </div>
            <div class="separator separator-dashed my-7"></div>
            <div class="row">
                <div class="col-12">
                    @if($product->related_products)
                        @foreach(\App\Models\Product\Product::find(unserialize($product->related_products)) as $product)
                            <label class="option">
									<span class="option-control">
										<span class="checkbox">
											<input
                                                    wire:model.defer="relatedIds" type="checkbox"
                                                    value="{{ $product->id }}"
                                            >
											<span></span>
										</span>
									</span>
                                <span class="option-label">
										<span class="option-head">
											<span class="option-title">
												{{ $product->name }}
											</span>
											<span class="option-focus">
												{{ $product->getRegularPrice() }}
											</span>
										</span>
										<span class="option-body">
											{{ $product->slug ?? 'بدون نامک' }}
										</span>
									</span>
                            </label>
                        @endforeach
                    @elseif(is_null($product->related_products) && is_null($search))
                        <div class="text-center p-10 text-muted">
                            هیچ محصول مرتبطی وجود ندارد
                        </div>
                    @endif
                    @foreach($products as $related)
                        @if(!collect($relatedIds)->contains($related->id))
                            <label class="option">
									<span class="option-control">
										<span class="checkbox">
											<input
                                                    wire:model.defer="relatedIds" type="checkbox"
                                                    value="{{ $related->id }}"
                                            >
											<span></span>
										</span>
									</span>
                                <span class="option-label">
										<span class="option-head">
											<span class="option-title">
												{{ $related->name }}
											</span>
											<span class="option-focus">
												{{ $related->getRegularPrice() }}
											</span>
										</span>
										<span class="option-body">
											{{ $related->slug ?? 'بدون نامک' }}
										</span>
									</span>
                            </label>
                        @endif
                    @endforeach
                </div>
            </div>

        </form>
        <div
                wire:loading.class.remove="d-none"
                class="overlay-layer bg-dark-o-10 d-none"
        >
            <div class="spinner spinner-primary"></div>
        </div>
    </x-slot>
</x-admin.card.simple>





