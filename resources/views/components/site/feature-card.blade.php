@props([
    'title',
    'body',
    'icon' => null,
])

<div class="feature-card" data-reveal>
    @if($icon)
        <div class="feature-card__icon" aria-hidden="true">{{ $icon }}</div>
    @endif
    <h4 class="feature-card__title">{{ $title }}</h4>
    <p class="feature-card__body">{{ $body }}</p>
</div>
