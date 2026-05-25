@php
    $current   = app()->getLocale();
    $target    = $current === 'ar' ? 'en' : 'ar';
    $routeName = Route::currentRouteName() ?: 'home';
    $switchUrl = route($routeName, ['locale' => $target]);
@endphp

<a href="{{ $switchUrl }}" class="site-lang-switcher" lang="{{ $target }}" aria-label="Switch language">
    {{ __('site.nav.lang_switch') }}
</a>
