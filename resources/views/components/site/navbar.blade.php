<nav class="site-navbar navbar navbar-expand-lg" id="siteNavbar">
    <div class="container">

        {{-- Brand --}}
        <a class="navbar-brand site-navbar__brand" href="{{ route('home', ['locale' => app()->getLocale()]) }}">
            <img src="{{ asset('images/logo.svg') }}" alt="{{ __('site.footer.company') }}" class="site-navbar__logo" onerror="this.style.display='none';this.nextElementSibling.style.display='block'">
            <span class="site-navbar__logo-text" style="display:none">{{ __('site.footer.company') }}</span>
        </a>

        {{-- Mobile toggle --}}
        <button class="navbar-toggler site-navbar__toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#navMenu"
                aria-controls="navMenu" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="site-navbar__bar"></span>
            <span class="site-navbar__bar"></span>
            <span class="site-navbar__bar"></span>
        </button>

        {{-- Links --}}
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav mx-auto gap-1">
                @foreach([
                    ['home', 'home'],
                    ['services', 'services'],
                    ['about', 'about'],
                    ['electric-cart', 'electric_cart'],
                    ['operations', 'operations'],
                    ['contact', 'contact'],
                ] as [$routeName, $labelKey])
                    <li class="nav-item">
                        <a class="nav-link site-navbar__link {{ Route::currentRouteName() === $routeName ? 'active' : '' }}"
                           href="{{ route($routeName, ['locale' => app()->getLocale()]) }}">
                            {{ __('site.nav.' . $labelKey) }}
                        </a>
                    </li>
                @endforeach
            </ul>

            {{-- CTA + Language switcher --}}
            <div class="site-navbar__actions d-flex align-items-center gap-3">
                <x-site.language-switcher />
                <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}"
                   class="btn btn-gold btn-sm">
                    {{ __('site.nav.book_now') }}
                </a>
            </div>
        </div>

    </div>
</nav>
