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
    <meta property="og:image"       content="{{ Vite::asset('resources/assets/logo.webp') }}">
    <meta property="og:locale"      content="{{ app()->getLocale() === 'ar' ? 'ar_SA' : 'en_US' }}">

    {{-- Twitter Card --}}
    <meta name="twitter:card"        content="summary">
    <meta name="twitter:title"       content="@yield('og_title', __('site.meta.og_title'))">
    <meta name="twitter:description" content="@yield('og_description', __('site.meta.og_description'))">
    <meta name="twitter:image"       content="{{ Vite::asset('resources/assets/logo.webp') }}">

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
        "@@context": "https://schema.org",
        "@@type": "LocalBusiness",
        "name": "{{ __('site.footer.company') }}",
        "description": "{{ __('site.meta.description') }}",
        "url": "{{ config('app.url') }}",
        "logo": "{{ Vite::asset('resources/assets/logo.webp') }}",
        "areaServed": ["Makkah", "Madinah", "Jeddah"],
        "serviceType": "Mobility & Transportation",
        "contactPoint": {
            "@@type": "ContactPoint",
            "telephone": "+966-50-000-0000",
            "contactType": "customer service",
            "availableLanguage": ["Arabic", "English"]
        }
    }
    </script>

    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <meta name="apple-mobile-web-app-title" content="{{ __('site.footer.company') }}">
    <link rel="manifest" href="/site.webmanifest">

    {{-- Preload critical fonts --}}
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

    @stack('head')
</head>
<body class="site-body">

    <x-site.navbar />

    <main id="main-content">
        @yield('content')
    </main>

    <x-site.footer />

    {{-- Floating WhatsApp --}}
    <a href="https://wa.me/966500000000" target="_blank" rel="noopener noreferrer"
       class="whatsapp-fab" aria-label="WhatsApp">
        <svg width="28" height="28" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
    </a>

    @stack('scripts')
</body>
</html>
