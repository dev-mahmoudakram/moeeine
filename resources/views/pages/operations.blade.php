@extends('layouts.app')
@section('title', __('site.nav.operations') . ' | ' . __('site.footer.company'))

@section('content')

{{-- Page hero --}}
<section class="page-hero">
    <div class="container">
        <span class="page-hero__eyebrow">{{ __('site.operations.eyebrow') }}</span>
        <h1 class="page-hero__title">{{ __('site.operations.headline') }}</h1>
        <p class="page-hero__subtitle">{{ __('site.operations.body') }}</p>
    </div>
</section>

{{-- Operations items --}}
<section class="operations-section">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
            @foreach(__('site.operations.items') as $item)
                <div class="col">
                    <x-site.feature-card
                        :title="$item['title']"
                        :body="$item['desc']"
                    />
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Stats strip --}}
<section class="stats-strip">
    <div class="container">
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6 g-3 justify-content-center">
            @foreach(__('site.stats.items') as $stat)
                <div class="col">
                    <x-site.stat-card :value="$stat['value']" :label="$stat['label']" />
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
    :secondaryText="__('site.partnership.cta')"
    :secondaryHref="route('contact', ['locale' => app()->getLocale()])"
/>

@endsection
