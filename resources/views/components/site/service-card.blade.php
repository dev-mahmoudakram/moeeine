@props([
    'title',
    'description',
    'icon' => null,
    'cta'  => null,
    'href' => '#',
])

<div class="service-card" data-reveal>
    @if($icon)
        <div class="service-card__icon" aria-hidden="true">{{ $icon }}</div>
    @else
        <div class="service-card__icon-dot" aria-hidden="true"></div>
    @endif
    <h3 class="service-card__title">{{ $title }}</h3>
    <p class="service-card__desc">{{ $description }}</p>
    @if($cta)
        <a href="{{ $href }}" class="service-card__cta">
            {{ $cta }}
            <span class="service-card__arrow" aria-hidden="true">
                {{ app()->getLocale() === 'ar' ? '←' : '→' }}
            </span>
        </a>
    @endif
</div>
