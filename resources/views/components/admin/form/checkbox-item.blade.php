@props(['color' => 'primary', 'size'])
<label class="checkbox {{ isset($size) ? 'checkbox-' . $size : null }} {{ isset($color) ? 'checkbox-' . $color : null }}">
    <input {{ $attributes->merge(['type' => 'checkbox', 'class' => 'checkbox']) }}>
    <span></span>
    {{ $slot }}
</label>