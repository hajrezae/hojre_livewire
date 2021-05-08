@props(['active' => 0, 'icon', 'tabId'])
<li class="nav-item">
    <a class="nav-link {{ $active == 1 ? 'active' : null}}" data-toggle="tab" href="#{{ isset($tabId) ? $tabId : null }}">
        <span class="nav-icon">
            @isset($icon)
                <i class="{{ $icon }}"></i>
            @endisset
        </span>
        <span class="nav-text">{{ $slot }}</span>
    </a>
</li>