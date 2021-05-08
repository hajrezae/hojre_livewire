@props(['route', 'text' => 'بازگشت'])
<div class="my-5">
    <h4>
        <a href="{{ route($route) }}">
            <i class="fas fa-arrow-right text-primary mr-3"></i>
            بازگشت به  {{ $text }}
        </a>
    </h4>
</div>