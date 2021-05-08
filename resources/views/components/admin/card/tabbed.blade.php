@props(['color', 'title', 'navClasses'])
<div {{ $attributes->merge(['class' => 'card card-custom']) }}>
    <div class="card-header">
        @isset($title)
            <div class="card-title">
                <h3 class="card-label">{{ $title }}</h3>
            </div>
        @endisset
        @isset($navItems)
            <div class="card-toolbar">
                <ul class="nav nav-bold nav-pills {{isset($navClasses) ? $navClasses : null}}">
                    {{ $navItems }}
                </ul>
            </div>
        @endisset
    </div>
    <div class="card-body">
        <div class="tab-content">
            {{ $navPanes }}
        </div>
    </div>
    @isset($footer)
        <div class="card-footer row justify-content-between">
            {{ $footer }}
        </div>
    @endisset
</div>