@props([
    'headline',
    'body'       => null,
    'primaryText',
    'primaryHref',
    'secondaryText' => null,
    'secondaryHref' => '#',
])

<section class="cta-band" data-reveal>
    <div class="container text-center">
        <h2 class="cta-band__headline">{{ $headline }}</h2>
        @if($body)
            <p class="cta-band__body">{{ $body }}</p>
        @endif
        <div class="cta-band__actions">
            <a href="{{ $primaryHref }}" class="btn btn-gold btn-lg">{{ $primaryText }}</a>
            @if($secondaryText)
                <a href="{{ $secondaryHref }}" class="btn btn-outline-gold btn-lg">{{ $secondaryText }}</a>
            @endif
        </div>
    </div>
</section>
