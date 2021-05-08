<div class="form-group">
    @isset($label)
        <label>{{ $label }} :</label>
    @endisset
    <div class="input-icon">
        <input {{ $attributes->merge(['class' => 'form-control', 'name' => 'search']) }}>
        <span>
            <i class="fas fa-search"></i>
        </span>
    </div>
    @isset($caption)
        <span class="form-text text-muted">{{ $caption }}</span>
    @endisset
</div>