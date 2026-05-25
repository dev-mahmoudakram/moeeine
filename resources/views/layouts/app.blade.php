<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title', __('site.meta.title'))</title>
    <meta name="description" content="@yield('description', __('site.meta.description'))">

    {{-- Open Graph --}}
    <meta property="og:type"        content="website">
    <meta property="og:url"         content="{{ url()->current() }}">
    <meta property="og:title"       content="@yield('og_title', __('site.meta.og_title'))">
    <meta property="og:description" content="@yield('og_description', __('site.meta.og_description'))">
    <meta property="og:image"       content="{{ asset('images/og-cover.jpg') }}">

    {{-- hreflang --}}
    <link rel="alternate" hreflang="ar" href="{{ url('/ar' . (request()->path() !== app()->getLocale() ? '/' . ltrim(str_replace(app()->getLocale(), '', request()->path()), '/') : '')) }}">
    <link rel="alternate" hreflang="en" href="{{ url('/en' . (request()->path() !== app()->getLocale() ? '/' . ltrim(str_replace(app()->getLocale(), '', request()->path()), '/') : '')) }}">
    <link rel="alternate" hreflang="x-default" href="{{ url('/ar') }}">

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
