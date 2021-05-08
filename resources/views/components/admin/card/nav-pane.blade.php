@props(['active' => 0])
<div class="tab-pane fade {{ $active ? 'show active' : null }}" id="{{ $attributes->get('id') }}" role="tabpanel" aria-labelledby="{{ $attributes->get('id') }}">
    {{ $slot }}
</div>
