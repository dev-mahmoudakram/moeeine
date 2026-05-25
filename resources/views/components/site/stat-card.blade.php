@props([
    'value',
    'label',
])

@php
    $isCountable = preg_match('/^\d+[\+%]?$/', $value);
@endphp

<div class="stat-card" data-reveal>
    <div class="stat-card__value" @if($isCountable) data-countup="{{ $value }}" @endif>
        @if($value === ':electric')
            <svg class="stat-card__icon" width="40" height="40" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M13 2L4.5 13.5H11L10 22L19.5 10.5H13L13 2Z"
                      stroke="currentColor" stroke-width="1.5"
                      stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        @else
            {{ $value }}
        @endif
    </div>
    <div class="stat-card__label">{{ $label }}</div>
</div>
