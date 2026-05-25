<footer class="site-footer">

    {{-- Top accent divider --}}
    <div class="site-footer__divider" aria-hidden="true">
        <span class="site-footer__divider-gem"></span>
    </div>

    <div class="container">

        {{-- Brand panel --}}
        <div class="site-footer__brand text-center" data-reveal>
            <a href="{{ route('home', ['locale' => app()->getLocale()]) }}" class="site-footer__brand-link">
                <img src="{{ asset('images/logo-light.svg') }}"
                     alt="{{ __('site.footer.company') }}"
                     class="site-footer__logo mx-auto"
                     onerror="this.style.display='none';this.nextElementSibling.style.display='block'">
                <span class="site-footer__brand-name" style="display:none">
                    {{ __('site.footer.company') }}
                </span>
            </a>
            <p class="site-footer__tagline">{{ __('site.footer.tagline') }}</p>
        </div>

        {{-- Thin separator --}}
        <div class="site-footer__inner-rule"></div>

        {{-- Three columns --}}
        <div class="row gy-5 justify-content-between">

            {{-- Quick links --}}
            <div class="col-6 col-md-4 col-lg-3">
                <h6 class="site-footer__col-title">{{ __('site.footer.links') }}</h6>
                <ul class="site-footer__links list-unstyled">
                    @foreach([
                        ['home',         'home'],
                        ['services',     'services'],
                        ['about',        'about'],
                        ['electric-cart','electric_cart'],
                        ['operations',   'operations'],
                        ['contact',      'contact'],
                    ] as [$route, $key])
                        <li>
                            <a href="{{ route($route, ['locale' => app()->getLocale()]) }}"
                               class="site-footer__link">
                                {{ __('site.nav.' . $key) }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Contact --}}
            <div class="col-6 col-md-4 col-lg-3">
                <h6 class="site-footer__col-title">{{ __('site.footer.contact') }}</h6>
                <ul class="site-footer__contact list-unstyled">
                    <li class="site-footer__contact-item">
                        <span class="site-footer__contact-label">{{ __('site.footer.phone') }}</span>
                        <a href="tel:+966500000000" class="site-footer__link site-footer__link--phone" dir="ltr">+966 50 000 0000</a>
                    </li>
                    <li class="site-footer__contact-item">
                        <span class="site-footer__contact-label">{{ __('site.footer.email') }}</span>
                        <a href="mailto:info@moein.sa" class="site-footer__link">info@moein.sa</a>
                    </li>
                    <li class="site-footer__contact-item mt-3">
                        <a href="https://wa.me/966500000000"
                           target="_blank" rel="noopener noreferrer"
                           class="btn-whatsapp btn btn-sm">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                            WhatsApp
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Service cities --}}
            <div class="col-12 col-md-4 col-lg-3">
                <h6 class="site-footer__col-title">{{ app()->getLocale() === 'ar' ? 'مدن الخدمة' : 'Service Cities' }}</h6>
                <ul class="site-footer__cities list-unstyled">
                    @foreach(__('site.contact.cities') as $city)
                        <li class="site-footer__city">
                            <span class="site-footer__city-dot" aria-hidden="true"></span>
                            {{ $city }}
                        </li>
                    @endforeach
                </ul>
                <div class="site-footer__lang-switch mt-4">
                    <x-site.language-switcher />
                </div>
            </div>

        </div>

        {{-- Bottom bar --}}
        <div class="site-footer__bottom">
            <span class="site-footer__copy">
                &copy; {{ date('Y') }} {{ __('site.footer.company') }}.
                {{ __('site.footer.rights') }}.
            </span>
            <div class="site-footer__legal">
                <a href="#" class="site-footer__legal-link">{{ __('site.footer.privacy') }}</a>
                <a href="#" class="site-footer__legal-link">{{ __('site.footer.terms') }}</a>
            </div>
        </div>

    </div>
</footer>
