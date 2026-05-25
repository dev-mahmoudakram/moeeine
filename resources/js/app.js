// ─── Bootstrap JS (side-effect: initialises dropdowns, collapse, etc.) ────
import 'bootstrap';

// ─── intl-tel-input (with utils bundled in) ───────────────────────────────
import intlTelInput from 'intl-tel-input/intlTelInputWithUtils';

// ─── nice-select2 ─────────────────────────────────────────────────────────
import NiceSelect from 'nice-select2';

// ─── Scroll-aware navbar ────────────────────────────────────────────────────
const navbar = document.getElementById('siteNavbar');
if (navbar) {
    const onScroll = () => navbar.classList.toggle('scrolled', window.scrollY > 40);
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
}

// ─── Scroll reveal (IntersectionObserver) ──────────────────────────────────
const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

if (!prefersReduced) {
    const revealObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    revealObserver.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.12, rootMargin: '0px 0px -48px 0px' }
    );

    document.querySelectorAll('[data-reveal]').forEach((el) => revealObserver.observe(el));
} else {
    document.querySelectorAll('[data-reveal]').forEach((el) => el.classList.add('is-visible'));
}

// ─── Count-up for stat numbers ─────────────────────────────────────────────
function animateCountUp(el) {
    const raw = el.dataset.countup;
    const numeric = parseFloat(raw.replace(/[^0-9.]/g, ''));
    if (isNaN(numeric)) return;

    const suffix = raw.replace(/[0-9.]/g, '');
    const duration = 1800;
    const start = performance.now();

    const step = (now) => {
        const progress = Math.min((now - start) / duration, 1);
        const eased = 1 - Math.pow(1 - progress, 3);
        el.textContent = Math.round(eased * numeric) + suffix;
        if (progress < 1) requestAnimationFrame(step);
    };

    requestAnimationFrame(step);
}

if (!prefersReduced) {
    const countUpObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    animateCountUp(entry.target);
                    countUpObserver.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.5 }
    );

    document.querySelectorAll('[data-countup]').forEach((el) => {
        const val = el.dataset.countup;
        if (/\d/.test(val)) countUpObserver.observe(el);
    });
}

// ─── Contact form: intl-tel-input + nice-select2 ──────────────────────────
document.addEventListener('DOMContentLoaded', () => {
    // intl-tel-input — phone display field
    const phoneDisplay = document.getElementById('phone_display');
    const phoneFull    = document.getElementById('phone_full');

    if (phoneDisplay && phoneFull) {
        const iti = intlTelInput(phoneDisplay, {
            initialCountry: 'sa',
            preferredCountries: ['sa', 'ae', 'kw', 'bh', 'om', 'qa'],
            separateDialCode: true,
        });

        // digits-only keypress filter (allow +, backspace, delete, arrows)
        phoneDisplay.addEventListener('keypress', (e) => {
            if (!/[0-9]/.test(e.key)) e.preventDefault();
        });

        // sync full E.164 number into hidden field before submit
        const contactForm = phoneDisplay.closest('form');
        if (contactForm) {
            contactForm.addEventListener('submit', () => {
                phoneFull.value = iti.getNumber();
            });
        }
    }

    // nice-select2 — all contact selects
    document.querySelectorAll('.contact-select').forEach((el) => {
        NiceSelect.bind(el, { searchable: false });
    });
});
