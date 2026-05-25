@extends('layouts.app')
@section('title',          __('site.meta.pages.about.title'))
@section('description',    __('site.meta.pages.about.description'))
@section('og_title',       __('site.meta.pages.about.og_title'))
@section('og_description', __('site.meta.pages.about.og_description'))

@section('content')

{{-- Page hero --}}
<section class="page-hero">
    <div class="container">
        <span class="page-hero__eyebrow">{{ __('site.about.eyebrow') }}</span>
        <h1 class="page-hero__title">{{ __('site.about.headline') }}</h1>
        <p class="page-hero__subtitle">{{ __('site.about.body') }}</p>
    </div>
</section>

{{-- Values --}}
<section class="about-section">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 g-4">
            @foreach(['value_1', 'value_2', 'value_3', 'value_4'] as $key)
                <div class="col">
                    <x-site.feature-card
                        :title="__('site.about.' . $key . '_title')"
                        :body="__('site.about.' . $key . '_body')"
                    />
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Experience quote --}}
<section class="experience-section">
    <div class="container" data-reveal>
        <x-site.section-heading
            :eyebrow="__('site.experience.eyebrow')"
            :headline="__('site.experience.headline')"
            :body="__('site.experience.body')"
            :light="true"
        />
        <p class="experience-section__quote">"{{ __('site.experience.quote') }}"</p>
    </div>
</section>

{{-- Partnership --}}
<section class="partnership-section">
    <div class="container">
        <x-site.section-heading
            :eyebrow="__('site.partnership.eyebrow')"
            :headline="__('site.partnership.headline')"
            :body="__('site.partnership.body')"
        />
        <div class="partnership-section__items mt-4" data-reveal>
            @foreach(__('site.partnership.items') as $item)
                <span class="partnership-section__badge">
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                    {{ $item }}
                </span>
            @endforeach
        </div>
        <p class="partnership-section__note mt-4" data-reveal>{{ __('site.partnership.note') }}</p>
    </div>
</section>

{{-- CTA --}}
<x-site.cta
    :headline="__('site.partnership.cta')"
    :primaryText="__('site.hero.cta_primary')"
    :primaryHref="route('contact', ['locale' => app()->getLocale()])"
    :secondaryText="__('site.contact.whatsapp')"
    secondaryHref="https://wa.me/966500000000"
/>

@endsection
