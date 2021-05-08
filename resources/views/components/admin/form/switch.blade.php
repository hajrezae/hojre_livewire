@props(['checked' => 0, 'withIcon' => 0, 'outline', 'color' => 'primary'])
<div {{ $attributes }}>
    <span class="switch {{ isset($outline) ? 'switch-outline switch-' . $color : 'switch-' . $color }} {{ $withIcon ? 'switch-icon' : null }}">
        <label>
            <input type="checkbox" {{ $checked  ? 'checked' : null}} name="select">
            <span></span>
        </label>
    </span>
</div>