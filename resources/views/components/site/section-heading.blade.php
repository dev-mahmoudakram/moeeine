@props([
    'eyebrow'  => null,
    'headline' => null,
    'body'     => null,
    'align'    => 'center',
    'light'    => false,
])

<div class="section-heading text-{{ $align }} {{ $light ? 'section-heading--light' : '' }}">
    @if($eyebrow)
        <span class="section-heading__eyebrow">{{ $eyebrow }}</span>
    @endif
    @if($headline)
        <h2 class="section-heading__headline">{{ $headline }}</h2>
    @endif
    @if($body)
        <p class="section-heading__body">{{ $body }}</p>
    @endif
</div>
