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
                    <img src="{{ Vite::asset('resources/assets/hero.jpeg') }}"
                         alt="{{ __('site.hero.image_alt') }}"
                         class="hero__image">
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
                    <img src="{{ Vite::asset('resources/assets/e-car.jpeg') }}"
                         alt="{{ __('site.cart.image_alt') }}"
                         class="cart-section__image">
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
                        <img src="{{ Vite::asset('resources/assets/mobile-screens/1.jpeg') }}"
                             alt="{{ __('site.app_preview.screen_alt', ['n' => 1]) }}">
                    </div>
                    <div class="app-section__phone-frame app-section__phone-frame--center phone-float" style="animation-delay:.8s">
                        <img src="{{ Vite::asset('resources/assets/mobile-screens/2.jpeg') }}"
                             alt="{{ __('site.app_preview.screen_alt', ['n' => 2]) }}">
                    </div>
                    <div class="app-section__phone-frame phone-float" style="animation-delay:1.6s">
                        <img src="{{ Vite::asset('resources/assets/mobile-screens/3.jpeg') }}"
                             alt="{{ __('site.app_preview.screen_alt', ['n' => 3]) }}">
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

{{-- ─── 11. Contact / CTA ───────────────────────────────────────────────── --}}
<section class="contact-section" id="contact">
    <div class="container">
        <x-site.section-heading
            :eyebrow="__('site.contact.eyebrow')"
            :headline="__('site.contact.headline')"
            :body="__('site.contact.body')"
            align="center"
        />
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact-section__card">
                    @if(session('contact_success'))
                        <div class="form-flash form-flash--success">
                            <svg width="18" height="18" fill="none" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.5"/><path d="M8 12l3 3 5-5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            {{ session('contact_success') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.store', ['locale' => app()->getLocale()]) }}"
                          method="POST" class="site-form" novalidate>
                        @csrf

                        <div class="row g-4">
                            {{-- Name --}}
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="name">{{ __('site.contact.name') }}</label>
                                    <input type="text" id="name" name="name"
                                           class="form-control @error('name') is-invalid @enderror"
                                           value="{{ old('name') }}"
                                           placeholder="{{ __('site.contact.name') }}">
                                    @error('name') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            {{-- Phone (intl-tel-input) --}}
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="phone_display">{{ __('site.contact.phone') }}</label>
                                    <input type="tel" id="phone_display"
                                           class="form-control @error('phone') is-invalid @enderror"
                                           placeholder="5xxxxxxxx">
                                    <input type="hidden" id="phone_full" name="phone" value="{{ old('phone') }}">
                                    @error('phone') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            {{-- Service type (nice-select2) --}}
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="service_type">{{ __('site.contact.service_type') }}</label>
                                    <select id="service_type" name="service_type"
                                            class="contact-select @error('service_type') is-invalid @enderror">
                                        <option value="" disabled {{ old('service_type') ? '' : 'selected' }}>{{ __('site.contact.select_service') }}</option>
                                        @foreach(__('site.services.items') as $service)
                                            <option value="{{ $service['title'] }}"
                                                {{ old('service_type') === $service['title'] ? 'selected' : '' }}>
                                                {{ $service['title'] }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('service_type') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            {{-- City (nice-select2) --}}
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="city">{{ __('site.contact.city') }}</label>
                                    <select id="city" name="city"
                                            class="contact-select @error('city') is-invalid @enderror">
                                        <option value="" disabled {{ old('city') ? '' : 'selected' }}>{{ __('site.contact.select_city') }}</option>
                                        @foreach(__('site.contact.cities') as $city)
                                            <option value="{{ $city }}"
                                                {{ old('city') === $city ? 'selected' : '' }}>
                                                {{ $city }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('city') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            {{-- Expected date --}}
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="date">{{ __('site.contact.date') }}</label>
                                    <input type="date" id="date" name="date" dir="ltr"
                                           class="form-control @error('date') is-invalid @enderror"
                                           value="{{ old('date') }}"
                                           min="{{ date('Y-m-d') }}">
                                    @error('date') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            {{-- Notes --}}
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="notes">{{ __('site.contact.notes') }}</label>
                                    <textarea id="notes" name="notes" rows="4"
                                              class="form-control @error('notes') is-invalid @enderror"
                                              placeholder="...">{{ old('notes') }}</textarea>
                                    @error('notes') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>

                        {{-- Actions --}}
                        <div class="form-actions">
                            <button type="submit" class="btn btn-gold btn-lg w-100">
                                {{ __('site.contact.submit') }}
                            </button>
                            <a href="https://wa.me/966500000000" target="_blank" rel="noopener noreferrer"
                               class="btn btn-whatsapp btn-lg w-100">
                                <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                                {{ __('site.contact.whatsapp') }}
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
