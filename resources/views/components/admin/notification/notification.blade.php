@props(['type', 'icon' => 'flaticon-warning'])
<div class="alert alert-custom alert-{{$type}} fade show mb-5" role="alert">
    <div class="alert-icon"><i class="{{ $icon }}"></i></div>
    <div class="alert-text font-weight-boldest">{{ $slot }}</div>
    <div class="alert-close">
        <button type="button" class="close" data-dismiss="alert" aria-label="نزدیک">
            <span aria-hidden="true"><i class="ki ki-close"></i></span>
        </button>
    </div>
</div>