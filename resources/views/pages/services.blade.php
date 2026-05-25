@extends('layouts.app')
@section('title',          __('site.meta.pages.services.title'))
@section('description',    __('site.meta.pages.services.description'))
@section('og_title',       __('site.meta.pages.services.og_title'))
@section('og_description', __('site.meta.pages.services.og_description'))

@section('content')

{{-- Page hero --}}
<section class="page-hero">
    <div class="container">
        <span class="page-hero__eyebrow">{{ __('site.services.eyebrow') }}</span>
        <h1 class="page-hero__title">{{ __('site.services.headline') }}</h1>
        <p class="page-hero__subtitle">{{ __('site.services.body') }}</p>
    </div>
</section>

{{-- All services grid --}}
<section class="services-section">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
            @foreach(__('site.services.items') as $service)
                <div class="col">
                    <x-site.service-card
                        :title="$service['title']"
                        :description="$service['desc']"
                    />
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- How it works --}}
<section class="steps-section">
    <div class="container">
        <x-site.section-heading
            :eyebrow="__('site.how_it_works.eyebrow')"
            :headline="__('site.how_it_works.headline')"
        />
        <div class="row gy-4 mt-2">
            @foreach(__('site.how_it_works.steps') as $step)
                <div class="col-md-6 col-lg-4">
                    <div class="step-item" data-reveal>
                        <div class="step-item__num">{{ $step['num'] }}</div>
                        <div class="step-item__body">
                            <h4 class="step-item__title">{{ $step['title'] }}</h4>
                            <p class="step-item__desc">{{ $step['desc'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<x-site.cta
    :headline="__('site.contact.headline')"
    :body="__('site.contact.body')"
    :primaryText="__('site.hero.cta_primary')"
    :primaryHref="route('contact', ['locale' => app()->getLocale()])"
    :secondaryText="__('site.contact.whatsapp')"
    secondaryHref="https://wa.me/966500000000"
/>

@endsection
