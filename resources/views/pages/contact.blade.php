@extends('layouts.app')
@section('title', __('site.nav.contact') . ' | ' . __('site.footer.company'))

@section('content')

{{-- Page hero --}}
<section class="page-hero">
    <div class="container">
        <span class="page-hero__eyebrow">{{ __('site.contact.eyebrow') }}</span>
        <h1 class="page-hero__title">{{ __('site.contact.headline') }}</h1>
        <p class="page-hero__subtitle">{{ __('site.contact.body') }}</p>
    </div>
</section>

{{-- Contact section --}}
<section class="contact-section" id="contact">
    <div class="container">
        <div class="row gy-5 align-items-start">

            {{-- Form --}}
            <div class="col-lg-7">
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
                                    <div class="date-picker-wrapper">
                                        <input type="text" id="date" name="date" dir="ltr"
                                               class="form-control date-picker @error('date') is-invalid @enderror"
                                               value="{{ old('date') }}"
                                               placeholder="{{ date('Y-m-d') }}"
                                               readonly>
                                        <span class="date-picker-wrapper__icon" aria-hidden="true">
                                            <svg width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                                        </span>
                                    </div>
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
                        </div>
                    </form>
                </div>
            </div>

            {{-- Info sidebar --}}
            <div class="col-lg-4 offset-lg-1">
                <div class="contact-info" data-reveal>
                    <h3 class="contact-info__title">{{ __('site.footer.contact') }}</h3>

                    {{-- Phone --}}
                    <div class="contact-info__item">
                        <div class="contact-info__icon" aria-hidden="true">
                            <svg width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        </div>
                        <div>
                            <div class="contact-info__label">{{ __('site.footer.phone') }}</div>
                            <div class="contact-info__value">
                                <a href="tel:+966500000000" dir="ltr">+966 50 000 0000</a>
                            </div>
                        </div>
                    </div>

                    {{-- Email --}}
                    <div class="contact-info__item">
                        <div class="contact-info__icon" aria-hidden="true">
                            <svg width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                        <div>
                            <div class="contact-info__label">{{ __('site.footer.email') }}</div>
                            <div class="contact-info__value">
                                <a href="mailto:info@moeeine.com">info@moeeine.com</a>
                            </div>
                        </div>
                    </div>

                    {{-- Service cities --}}
                    <div class="contact-info__item">
                        <div class="contact-info__icon" aria-hidden="true">
                            <svg width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <div>
                            <div class="contact-info__label">{{ app()->getLocale() === 'ar' ? 'مدن الخدمة' : 'Service Cities' }}</div>
                            <div class="contact-info__cities">
                                @foreach(__('site.contact.cities') as $city)
                                    <span class="contact-info__city-tag">{{ $city }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    {{-- WhatsApp --}}
                    <a href="https://wa.me/966500000000" target="_blank" rel="noopener noreferrer"
                       class="btn btn-whatsapp w-100 mt-2">
                        <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        {{ __('site.contact.whatsapp') }}
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
