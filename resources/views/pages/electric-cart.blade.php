@extends('layouts.app')
@section('title',          __('site.meta.pages.cart.title'))
@section('description',    __('site.meta.pages.cart.description'))
@section('og_title',       __('site.meta.pages.cart.og_title'))
@section('og_description', __('site.meta.pages.cart.og_description'))

@section('content')

{{-- Page hero --}}
<section class="page-hero">
    <div class="container">
        <span class="page-hero__eyebrow">{{ __('site.cart.eyebrow') }}</span>
        <h1 class="page-hero__title">{{ __('site.cart.headline') }}</h1>
        <p class="page-hero__subtitle">{{ __('site.cart.body') }}</p>
    </div>
</section>

{{-- Cart showcase --}}
<section class="cart-section">
    <div class="container">
        <div class="row align-items-center gy-5">
            <div class="col-lg-6" data-reveal>
                <div class="cart-section__visual">
                    <img src="{{ Vite::asset('resources/assets/e-car.jpeg') }}"
                         alt="{{ __('site.cart.image_alt') }}"
                         class="cart-section__image">
                </div>
            </div>
            <div class="col-lg-6" data-reveal data-reveal-delay="1">
                <ul class="cart-section__feature-list list-unstyled">
                    @foreach(__('site.cart.features') as $feature)
                        <li class="cart-section__feature-item">{{ $feature }}</li>
                    @endforeach
                </ul>
                <div class="mt-4">
                    <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}"
                       class="btn btn-gold btn-lg">
                        {{ __('site.hero.cta_primary') }}
                    </a>
                </div>
            </div>
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
    :secondaryText="__('site.services.cta')"
    :secondaryHref="route('services', ['locale' => app()->getLocale()])"
/>

@endsection
