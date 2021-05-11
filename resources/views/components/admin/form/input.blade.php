@props(['label', 'caption' , 'inputType' => 'simple', 'icon', 'solid', 'hasButton'])
@if($inputType == 'simple')
    <div class="form-group">
        @isset($label)
            <label>{{ $label }} :</label>
        @endisset
        <input {{ $attributes->class(['is-valid' => session()->get($attributes->get('wire:model')) == 'valid', 'is-invalid' => $errors->has($attributes->get('wire:model'))])->merge(['class' => 'form-control']) }}>
        @error($attributes->get('wire:model'))
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        @isset($caption)
            <span class="form-text text-muted">{{ $caption }}</span>
        @endisset
    </div>
@elseif($inputType === 'group')
    <div class="form-group {{ $errors->has($attributes->get('wire:model')) ? 'validated' : null }}">
        @isset($label)
            <label>{{ $label }} :</label>
        @endisset
        <div class="input-group {{isset($solid) ? 'input-group-solid' : null}}">
            @isset($prepend)
                @isset($hasButton)
                    <div class="input-group-prepend">
                        {{ $prepend }}
                    </div>
                @else
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                        {{ $prepend }}
                        </div>
                    </div>
                @endisset
            @endisset
            <input {{ $attributes->class(['is-valid' => session()->get($attributes->get('wire:model')) === 'valid','is-invalid' => $errors->has($attributes->get('wire:model'))])->merge(['class' => 'form-control']) }}>
            @isset($append)
                <div class="input-group-append">
                    <div class="input-group-text">
                        {{ $append }}
                    </div>
                </div>
            @endisset
        </div>
        @error($attributes->get('wire:model'))
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        @isset($caption)
            <span class="form-text text-muted">{{ $caption }}</span>
        @endisset
    </div>
@elseif($inputType === 'withIcon')
    <div class="form-group {{ $errors->has($attributes->get('wire:model')) ? 'validated' : null }}">
        @isset($label)
            <label>{{ $label }} :</label>
        @endisset
        <div class="input-icon">
            <input {{ $attributes->class(['is-valid' => session()->get($attributes->get('wire:model')) == 'valid','is-invalid' => $errors->has($attributes->get('wire:model'))])->merge(['class' => 'form-control']) }}>
            <span>
                <i {{ $attributes->merge(['class' => isset($icon) ? $icon : null]) }}></i>
            </span>
        </div>
        @error($attributes->get('wire:model'))
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        @isset($caption)
            <span class="form-text text-muted">{{ $caption }}</span>
        @endisset
    </div>

@elseif($inputType == 'row')
    <div class="form-group row">
        @isset($label)
            <label class="col-form-label col text-lg-left text-left">{{ $label }} :</label>
        @endisset
        <div class="col-9">
            <input {{ $attributes->class(['is-valid' => session()->has($attributes->get('wire:model')),'is-invalid' => $errors->has($attributes->get('wire:model'))])->merge(['class' => 'form-control']) }}>
            @error($attributes->get('wire:model'))
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
@endif

