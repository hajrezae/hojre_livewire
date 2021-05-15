@props(['checkboxType' => 'horizontal', 'label', 'caption'])

@if($checkboxType = 'horizontal')
    <div class="form-group validated">
        @isset($label)
            <label>{{ $label }}</label>
        @endisset
        <div class="checkbox-inline">
            {{ $slot }}
        </div>
        @isset($caption)
            <span class="form-text text-muted">{{ $caption }}</span>
        @endisset
        @error($attributes->get('wire:model'))
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
@elseif($checkboxType = 'vertical')
    <div class="form-group row validated">
        @isset($label)
            <label>{{ $label }}</label>
        @endisset
        <div class="col-9 col-form-label">
            <div class="checkbox-list">
                {{ $slot }}
            </div>
        </div>
        @error($attributes->get('wire:model'))
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
@endif
