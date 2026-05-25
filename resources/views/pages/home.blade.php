@extends('layouts.app')

@section('title', __('site.meta.title'))
@section('description', __('site.meta.description'))
@section('og_title', __('site.meta.og_title'))
@section('og_description', __('site.meta.og_description'))

@section('content')

{{-- ─── 1. Hero ──────────────────────────────────────────────────────────── --}}
<section class="hero">
    <div class="hero__bg-gradient"></div>
    <div class="hero__geo geo-bg"></div>
    <div class="hero-arch-bg"></div>
    <div class="hero__glow-1"></div>
    <div class="hero__glow-2"></div>

    <div class="container hero__content">
        <div class="row align-items-center gy-5">
            <div class="col-lg-6" data-reveal>
                <span class="hero__eyebrow">{{ __('site.hero.eyebrow') }}</span>
                <h1 class="hero__headline">
                    <em>{{ __('site.hero.headline') }}</em>
                </h1>
                <p class="hero__subheadline">{{ __('site.hero.subheadline') }}</p>
                <div class="hero__actions">
                    <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}"
                       class="btn btn-gold btn-lg">
                        {{ __('site.hero.cta_primary') }}
                    </a>
                    <a href="{{ route('services', ['locale' => app()->getLocale()]) }}"
                       class="btn btn-outline-gold btn-lg">
                        {{ __('site.hero.cta_secondary') }}
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero__visual" data-reveal data-reveal-delay="2">
                    <img src="{{ Vite::asset('resources/assets/hero.webp') }}"
                         alt="{{ __('site.hero.image_alt') }}"
                         class="hero__image"
                         fetchpriority="high"
                         decoding="async">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ─── 2. Trust / Stats strip ──────────────────────────────────────────── --}}
<section class="stats-strip">
    <div class="container">
        <x-site.section-heading
            :eyebrow="__('site.stats.heading')"
            headline=""
            align="center"
        />
        <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-6 gy-4">
            @foreach(__('site.stats.items') as $i => $stat)
                <div class="col">
                    <x-site.stat-card
                        :value="$stat['value']"
                        :label="$stat['label']"
                        data-reveal
                        :data-reveal-delay="$i + 1"
                    />
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ─── 3. About ─────────────────────────────────────────────────────────── --}}
<section class="about-section">
    <div class="container">
        <div class="row align-items-center gy-5">
            <div class="col-lg-6" data-reveal>
                <x-site.section-heading
                    :eyebrow="__('site.about.eyebrow')"
                    :headline="__('site.about.headline')"
                    :body="__('site.about.body')"
                    align="start"
                />
            </div>
            <div class="col-lg-6">
                <div class="row g-3">
                    @foreach(['value_1', 'value_2', 'value_3', 'value_4'] as $i => $key)
                        <div class="col-sm-6">
                            <x-site.feature-card
                                :title="__('site.about.' . $key . '_title')"
                                :body="__('site.about.' . $key . '_body')"
                                data-reveal
                                :data-reveal-delay="$i + 1"
                            />
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ─── 4. Services ─────────────────────────────────────────────────────── --}}
<section class="services-section">
    <div class="container">
        <x-site.section-heading
            :eyebrow="__('site.services.eyebrow')"
            :headline="__('site.services.headline')"
            align="center"
            :light="true"
        />
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
            @foreach(__('site.services.items') as $i => $service)
                <div class="col">
                    <x-site.service-card
                        :title="$service['title']"
                        :description="$service['desc']"
                        :cta="__('site.services.cta')"
                        :href="route('services', ['locale' => app()->getLocale()])"
                        data-reveal
                        :data-reveal-delay="($i % 3) + 1"
                    />
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ─── 5. Electric Cart showcase ───────────────────────────────────────── --}}
<section class="cart-section">
    <div class="container">
        <div class="row align-items-center gy-5">
            <div class="col-lg-6">
                <div class="cart-section__visual" data-reveal>
                    <img src="{{ Vite::asset('resources/assets/e-car.webp') }}"
                         alt="{{ __('site.cart.image_alt') }}"
                         class="cart-section__image"
                         loading="lazy"
                         decoding="async">
                </div>
            </div>
            <div class="col-lg-6" data-reveal data-reveal-delay="1">
                <x-site.section-heading
                    :eyebrow="__('site.cart.eyebrow')"
                    :headline="__('site.cart.headline')"
                    :body="__('site.cart.body')"
                    align="start"
                />
                <ul class="cart-section__feature-list list-unstyled mt-4">
                    @foreach(__('site.cart.features') as $feature)
                        <li class="cart-section__feature-item">{{ $feature }}</li>
                    @endforeach
                </ul>
                <div class="mt-4">
                    <a href="{{ route('electric-cart', ['locale' => app()->getLocale()]) }}"
                       class="btn btn-gold">
                        {{ __('site.cart.cta') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ─── 6. How It Works ─────────────────────────────────────────────────── --}}
<section class="steps-section">
    <div class="container">
        <x-site.section-heading
            :eyebrow="__('site.how_it_works.eyebrow')"
            :headline="__('site.how_it_works.headline')"
            align="center"
        />
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
            @foreach(__('site.how_it_works.steps') as $i => $step)
                <div class="col" data-reveal data-reveal-delay="{{ ($i % 3) + 1 }}">
                    <div class="step-item">
                        <div class="step-item__num">{{ $step['num'] }}</div>
                        <div class="step-item__body">
                            <div class="step-item__title">{{ $step['title'] }}</div>
                            <div class="step-item__desc">{{ $step['desc'] }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ─── 7. Operations ───────────────────────────────────────────────────── --}}
<section class="operations-section">
    <div class="container">
        <x-site.section-heading
            :eyebrow="__('site.operations.eyebrow')"
            :headline="__('site.operations.headline')"
            :body="__('site.operations.body')"
            align="center"
        />
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
            @foreach(__('site.operations.items') as $i => $item)
                <div class="col">
                    <x-site.feature-card
                        :title="$item['title']"
                        :body="$item['desc']"
                        data-reveal
                        :data-reveal-delay="($i % 4) + 1"
                    />
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ─── 8. App Preview ──────────────────────────────────────────────────── --}}
<section class="app-section">
    <div class="container">
        <div class="row align-items-center gy-5">
            <div class="col-lg-5" data-reveal>
                <x-site.section-heading
                    :eyebrow="__('site.app_preview.eyebrow')"
                    :headline="__('site.app_preview.headline')"
                    :body="__('site.app_preview.body')"
                    align="start"
                    :light="true"
                />
                <ul class="app-section__features list-unstyled mt-4">
                    @foreach(__('site.app_preview.features') as $feature)
                        <li>{{ $feature }}</li>
                    @endforeach
                </ul>
                <div class="mt-4">
                    <a href="#" class="btn btn-gold">{{ __('site.app_preview.cta') }}</a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="app-section__phones" data-reveal data-reveal-delay="1">
                    <div class="app-section__phone-frame phone-float">
                        <img src="{{ Vite::asset('resources/assets/mobile-screens/1.webp') }}"
                             alt="{{ __('site.app_preview.screen_alt', ['n' => 1]) }}"
                             loading="lazy" decoding="async">
                    </div>
                    <div class="app-section__phone-frame app-section__phone-frame--center phone-float" style="animation-delay:.8s">
                        <img src="{{ Vite::asset('resources/assets/mobile-screens/2.webp') }}"
                             alt="{{ __('site.app_preview.screen_alt', ['n' => 2]) }}"
                             loading="lazy" decoding="async">
                    </div>
                    <div class="app-section__phone-frame phone-float" style="animation-delay:1.6s">
                        <img src="{{ Vite::asset('resources/assets/mobile-screens/3.webp') }}"
                             alt="{{ __('site.app_preview.screen_alt', ['n' => 3]) }}"
                             loading="lazy" decoding="async">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ─── 9. Experience ───────────────────────────────────────────────────── --}}
<section class="experience-section">
    <div class="container" data-reveal>
        <x-site.section-heading
            :eyebrow="__('site.experience.eyebrow')"
            :headline="__('site.experience.headline')"
            :body="__('site.experience.body')"
            align="center"
        />
        <p class="experience-section__quote">
            "{{ __('site.experience.quote') }}"
        </p>
    </div>
</section>

{{-- ─── 10. Partnership ─────────────────────────────────────────────────── --}}
<section class="partnership-section">
    <div class="container" data-reveal>
        <x-site.section-heading
            :eyebrow="__('site.partnership.eyebrow')"
            :headline="__('site.partnership.headline')"
            :body="__('site.partnership.body')"
            align="center"
        />
        <div class="partnership-section__items justify-content-center">
            @foreach(__('site.partnership.items') as $item)
                <span class="partnership-section__badge">{{ $item }}</span>
            @endforeach
        </div>
        <div class="text-center mt-5">
            <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}"
               class="btn btn-outline-gold">
                {{ __('site.partnership.cta') }}
            </a>
        </div>
        <p class="partnership-section__note text-center">{{ __('site.partnership.note') }}</p>
    </div>
</section>

{{-- ─── 11. CTA band ────────────────────────────────────────────────────────── --}}
<x-site.cta
    :headline="__('site.contact.headline')"
    :body="__('site.contact.body')"
    :primaryText="__('site.hero.cta_primary')"
    :primaryHref="route('contact', ['locale' => app()->getLocale()])"
    :secondaryText="__('site.contact.whatsapp')"
    secondaryHref="https://wa.me/966500000000"
/>

@endsection
