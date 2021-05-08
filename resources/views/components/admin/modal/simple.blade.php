@props(['title' => 'مودال', 'size' => 'lg'])
<div {{ $attributes->merge(['class' => 'modal fade']) }} role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-{{$size}}" role="document">
        <div class="modal-content">
            {{ $slot }}
        </div>
    </div>
</div>