@props(['checkboxType' => 'horizontal', 'label', 'caption'])

@if($checkboxType = 'horizontal')
    <div class="form-group">
        @isset($label)
            <label>{{ $label }}</label>
        @endisset
        <div class="checkbox-inline">
            {{ $slot }}
        </div>
        @isset($caption)
            <span class="form-text text-muted">{{ $caption }}</span>
        @endisset
    </div>
@elseif($checkboxType = 'vertical')
    <div class="form-group row">
        @isset($label)
            <label>{{ $label }}</label>
        @endisset
        <div class="col-9 col-form-label">
            <div class="checkbox-list">
                {{ $slot }}
            </div>
        </div>
    </div>
@endif
