@props(['select2' => false, 'label'])
<div class="form-group">
    @isset($label)
        <label>{{ $label }} :</label>
    @endisset
    <select {{ $attributes->class(['is-valid' => session()->has($attributes->get('wire:model')), 'is-invalid' => $errors->has($attributes->get('wire:model'))])->merge(['class' => 'form-control']) }}>
        {{ $slot }}
    </select>
        @error($attributes->get('wire:model'))
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
</div>
