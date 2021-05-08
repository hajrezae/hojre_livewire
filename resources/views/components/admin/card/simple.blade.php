@props(['color', 'title', 'subtitle', 'icon', 'footerClasses'])
<div {{ $attributes->merge(['class' => 'card card-custom']) }}>
    <div class="card-header">
        <div class="card-title">
            @isset($icon)
                <span class="card-icon">
                    <i class="{{ $icon }}"></i>
                </span>
            @endisset
            <h3 class="card-label">
                @isset($title)
                    {{ $title }}
                @else
                    برای کارت یک عنوان قرار دهید
                @endisset
                @isset($subtitle)
                    <small>{{ $subtitle }}</small>
                @endisset
            </h3>
        </div>
        @isset($toolbar)
            <div class="card-toolbar">
                {{ $toolbar }}
            </div>
        @endisset
    </div>
    <div class="card-body">
        @isset($body)
            {{ $body }}
        @else
            <div class="text-center text-danger">
                برای کارت محتوا قرار دهید
            </div>
        @endisset
    </div>
    @isset($footer)
        <div class="card-footer row justify-content-between">
            {{ $footer }}
        </div>
    @endisset
</div>