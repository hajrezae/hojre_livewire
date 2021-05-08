@props(['label', 'caption'])
<div class="form-group">
    @isset($label)
        <label for="{{ $attributes->get('id') }}">{{ $label }} :</label>
    @endisset
    <textarea {{ $attributes->merge(['class' => 'form-control']) }}>{{$slot}}</textarea>
    @error($attributes->get('wire:model'))
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    @isset($caption)
        <span class="form-text text-muted">{{ $caption }}</span>
    @endisset
</div>