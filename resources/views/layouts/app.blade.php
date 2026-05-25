<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title', __('site.meta.title'))</title>
    <meta name="description" content="@yield('description', __('site.meta.description'))">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph --}}
    <meta property="og:type"        content="website">
    <meta property="og:site_name"   content="{{ __('site.footer.company') }}">
    <meta property="og:url"         content="{{ url()->current() }}">
    <meta property="og:title"       content="@yield('og_title', __('site.meta.og_title'))">
    <meta property="og:description" content="@yield('og_description', __('site.meta.og_description'))">
    <meta property="og:image"       content="{{ Vite::asset('resources/assets/logo.png') }}">
    <meta property="og:locale"      content="{{ app()->getLocale() === 'ar' ? 'ar_SA' : 'en_US' }}">

    {{-- Twitter Card --}}
    <meta name="twitter:card"        content="summary">
    <meta name="twitter:title"       content="@yield('og_title', __('site.meta.og_title'))">
    <meta name="twitter:description" content="@yield('og_description', __('site.meta.og_description'))">
    <meta name="twitter:image"       content="{{ Vite::asset('resources/assets/logo.png') }}">

    {{-- hreflang --}}
    @php
        $path = '/' . ltrim(preg_replace('#^(ar|en)/?#', '', request()->path()), '/');
        $path = rtrim($path, '/') ?: '/';
    @endphp
    <link rel="alternate" hreflang="ar"      href="{{ url('/ar' . $path) }}">
    <link rel="alternate" hreflang="en"      href="{{ url('/en' . $path) }}">
    <link rel="alternate" hreflang="x-default" href="{{ url('/ar' . $path) }}">

    {{-- JSON-LD: LocalBusiness --}}
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "{{ __('site.footer.company') }}",
        "description": "{{ __('site.meta.description') }}",
        "url": "{{ config('app.url') }}",
        "logo": "{{ Vite::asset('resources/assets/logo.png') }}",
        "areaServed": ["Makkah", "Madinah", "Jeddah"],
        "serviceType": "Mobility & Transportation",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+966-50-000-0000",
            "contactType": "customer service",
            "availableLanguage": ["Arabic", "English"]
        }
    }
    </script>

    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

    @stack('head')
</head>
<body class="site-body">

    <x-site.navbar />

    <main id="main-content">
        @yield('content')
    </main>

    <x-site.footer />

    @stack('scripts')
</body>
</html>
