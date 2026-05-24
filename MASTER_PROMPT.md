# MASTER PROMPT — Premium Luxury Website for Haramain Mobility Service

You are a senior Laravel 13 full-stack engineer, premium UI/UX designer, Arabic-first product designer, Bootstrap/SCSS specialist, and Laravel localization expert.

I want you to design and build a **premium luxury website** for a Saudi smart mobility service dedicated to serving visitors of the Two Holy Mosques.

## Critical Direction

This is **NOT** a mobile app redesign.

The mobile app already exists. The goal is to build a premium public website / marketing platform that presents the service, brand, operations, booking journey, and project value in a luxurious, trustworthy, official, and elegant way.

The website must feel like:

> Luxury Saudi Hospitality + Smart Mobility + Spiritual Care

## Tech Stack

Use:

- Laravel 13
- Blade
- Bootstrap 5
- Custom SCSS
- Vite
- Laravel built-in localization
- Arabic-first RTL layout
- English as localized secondary language
- Vanilla JavaScript only where needed
- CSS animations and IntersectionObserver interactions
- Clean Laravel architecture
- Reusable Blade components
- Semantic HTML
- SEO-friendly structure

Do **NOT** use:

- Next.js
- React
- Tailwind CSS
- Inertia.js unless the existing project already requires it
- SPA architecture
- Heavy JavaScript frameworks
- Framer Motion, because this is not a React project

## Laravel Boost Requirement

Before writing or changing code, use Laravel Boost with Claude VS Code Extension.

You must:

1. Inspect the current Laravel project structure.
2. Check existing routes, Blade files, assets, config, middleware, packages, Vite setup, Bootstrap setup, and localization setup.
3. Use Laravel Boost documentation/context whenever unsure about Laravel conventions.
4. Follow existing project conventions if they already exist.
5. Do not overwrite unrelated files.
6. Make clean, incremental, production-ready changes.
7. Verify routes, Blade rendering, asset compilation, localization, and RTL/LTR behavior after implementation.

## Project Context

The service provides electric carts, wheelchairs, and trained companions for elderly visitors, people with disabilities, and visitors who need easier mobility around Haram areas, hotels, bus stations, parking areas, malls, and public locations.

The service supports:

- Pre-booking
- Pickup and drop-off locations
- Trained companions
- Electric wheelchair/cart rental
- Service points
- Field supervisors
- Customer support
- Technical support
- Fleet tracking
- Battery monitoring
- Maintenance
- Charging
- Operations center
- Reports and dashboards

The service also includes a smart electric cart model designed for Haram visitors. It is foldable, easy to move, suitable for crowded areas, and can be integrated with electronic booking, GPS tracking, battery monitoring, service points, maintenance, reporting, and operations management.

## Target Audience

The website should speak to:

1. Pilgrims and visitors who need mobility support.
2. Families booking for elderly parents or people with disabilities.
3. Hotels and hospitality partners.
4. Operators, authorities, and investors who need to understand the project professionally.

## Language and Localization Requirements

Arabic is the **default and main language**.
English is a localized secondary language.

Required behavior:

1. Default locale: `ar`.
2. Secondary locale: `en`.
3. Locale-prefixed URLs:

```txt
/ar
/en
/ar/services
/en/services
/ar/about
/en/about
/ar/electric-cart
/en/electric-cart
/ar/operations
/en/operations
/ar/contact
/en/contact
```

4. If no locale is provided, redirect to `/ar`.
5. All visible content must come from translation files.
6. Use:

```txt
lang/ar/site.php
lang/en/site.php
```

7. Do not hardcode visible text in Blade files.
8. The HTML tag must dynamically set language and direction:

```blade
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
```

9. Arabic pages must be perfectly RTL.
10. English pages must be LTR.
11. Add a language switcher in the navbar.
12. Localized SEO metadata is required.

## Brand Direction

Create a premium Saudi-inspired visual identity.

The visual mood should be:

- Luxury Saudi hospitality
- Smart mobility
- Spiritual care
- Trust
- Comfort
- Dignity
- Operational excellence

Use:

- Dark emerald green
- Deep teal
- Luxury gold
- Warm ivory
- Soft turquoise accents
- Subtle Islamic geometric patterns
- Elegant arches inspired by Haram architecture
- Large spacing
- Premium cards
- Soft shadows
- Glassmorphism where appropriate
- Smooth but subtle animations

Avoid:

- Generic medical look
- Generic delivery app look
- Overcrowded UI
- Cheap gradients
- Excessive icons
- Overused stock-layout design

## Suggested SCSS Color System

Use these as a starting point:

```scss
$color-emerald: #003C35;
$color-deep-teal: #062F2B;
$color-dark: #021F1C;
$color-gold: #D9B879;
$color-gold-light: #E7C98A;
$color-ivory: #F8F2E6;
$color-muted-mint: #5CC7B2;
$color-card: rgba(255, 255, 255, 0.06);
$color-border: rgba(217, 184, 121, 0.22);
```

## Typography

Arabic font suggestions:

- IBM Plex Sans Arabic
- Tajawal
- Cairo

English font suggestions:

- Inter
- Montserrat

The typography must be:

- Elegant
- Highly readable
- Arabic-first
- Large enough for older users and families booking for them
- Consistent across RTL/LTR

## Animation Requirements

Add some premium animations, but keep them subtle and performance-friendly.

Use:

- CSS keyframes
- CSS transitions
- Vanilla JS IntersectionObserver for scroll reveal
- Soft hero glow animation
- Gentle floating decorative shapes
- Service card hover lift
- Button hover shimmer or gold glow
- Section fade-up reveal
- Phone mockup slow float
- Optional number count-up for stats

Do not over-animate.

Animation rules:

1. Animations must feel calm, premium, and respectful.
2. Respect `prefers-reduced-motion`.
3. Avoid heavy libraries unless already installed.
4. Keep JavaScript minimal.
5. Animations must not affect Core Web Vitals.
6. Do not use Framer Motion because this is not React.

## Pages

Build these pages or sections:

1. Home
2. Services
3. About / Project
4. Electric Cart
5. Operations
6. Contact / Booking

If the current project is small, implement them as homepage sections first and prepare routes/pages for expansion.

## Homepage Sections

### 1. Premium Hero Section

Create a cinematic luxury hero section.

Content direction:

- Arabic headline examples:
  - رحلة أيسر لضيوف الرحمن
  - تنقّل آمن وراقي داخل الحرمين ومحيطهما
  - خدمة ذكية لراحة كبار السن وذوي الهمم

Description:

Explain that the platform provides electric carts, wheelchairs, and trained companions through a smart booking and operations system.

CTA buttons:

- احجز خدمتك الآن
- استكشف الخدمات

Design:

- Dark emerald background
- Subtle gold arch motif
- Premium image area
- Luxury gradient overlay
- Soft animated glow
- Elegant Arabic typography

### 2. Trust / Stats Section

Show premium trust indicators:

- مركز عمليات 24/7
- مرافقون مدرّبون
- حجز إلكتروني
- عربات كهربائية
- نقاط خدمة
- تتبع وتشغيل ذكي

### 3. About the Service

Explain the service in a human and official tone.

Focus on:

- خدمة ضيوف الرحمن
- راحة كبار السن
- دعم ذوي الهمم
- الخصوصية والكرامة
- الاستقلالية
- السلامة
- سهولة التنقل

### 4. Services Grid

Create premium service cards for:

- عربة كهربائية بدون مرافق
- عربة مع مرافق مدرّب
- خدمة الفنادق
- خدمة محطات الباصات والمواقف
- توصيل داخل المنطقة المركزية
- توصيل خارج المنطقة المركزية
- دعم كبار السن وذوي الهمم

Each card should include:

- Title
- Short description
- Icon or visual motif
- CTA
- Elegant hover effect

### 5. Electric Cart Showcase

Create a product-like premium showcase section.

Features:

- قابلة للطي وسهلة التخزين
- مناسبة للممرات والمناطق المزدحمة
- آمنة ومستقرة
- بطارية مناسبة للرحلات اليومية
- قابلة للتتبع والصيانة
- سهلة الاستخدام

Design this section like a luxury product presentation, not a normal service card.

### 6. How It Works

Create a simple step-by-step journey:

1. اختر الخدمة
2. حدد التاريخ والوقت
3. اختر موقع الاستلام والتوصيل
4. أضف بيانات المستفيد
5. أكّد الحجز والدفع
6. استلم الخدمة وتابعها بسهولة

Make it very clear and accessible, especially for families booking for elderly users.

### 7. Operations Excellence

Present the project as a complete operating system.

Include:

- مركز عمليات 24/7
- خدمة عملاء
- مشرفون ميدانيون
- دعم فني
- فريق لوجستي
- مراقبة الأسطول
- الصيانة والشحن
- تقارير تشغيلية

This section should feel professional and suitable for B2B, investors, and official presentations.

### 8. App Preview Section

Use the existing mobile app screenshots as previews only.

Display them in premium phone mockups.

Show that the mobile app supports:

- Browsing services
- Booking
- Prayer times
- Qibla
- Language selection
- Orders
- Profile
- Cart

Do not redesign the app.

### 9. Experience / Emotional Section

Create an emotional premium section focused on:

- راحة كبار السن
- خدمة ضيوف الرحمن
- تنقّل آمن ومنظّم
- خصوصية وكرامة المستفيد
- تجربة روحانية أكثر سهولة

### 10. Partnership / Institutional Section

Create a professional section explaining that the system is ready to integrate with:

- Hotels
- Service points
- Operations teams
- Payment systems
- Tracking systems
- Future official platforms

Important:

Do **not** claim official partnership with any authority unless it is already confirmed in the project content.

### 11. CTA / Contact Section

Create a final CTA and contact/booking form.

Fields:

- الاسم
- رقم الجوال
- نوع الخدمة
- المدينة
- التاريخ المتوقع
- ملاحظات

Buttons:

- إرسال الطلب
- تواصل عبر واتساب

## Suggested Laravel Structure

Use or create files similar to:

```txt
routes/web.php

app/Http/Middleware/SetLocale.php

resources/views/layouts/app.blade.php
resources/views/pages/home.blade.php
resources/views/pages/services.blade.php
resources/views/pages/about.blade.php
resources/views/pages/electric-cart.blade.php
resources/views/pages/operations.blade.php
resources/views/pages/contact.blade.php

resources/views/components/site/navbar.blade.php
resources/views/components/site/footer.blade.php
resources/views/components/site/language-switcher.blade.php
resources/views/components/site/section-heading.blade.php
resources/views/components/site/service-card.blade.php
resources/views/components/site/feature-card.blade.php
resources/views/components/site/stat-card.blade.php
resources/views/components/site/cta.blade.php

resources/scss/app.scss
resources/scss/abstracts/_variables.scss
resources/scss/abstracts/_mixins.scss
resources/scss/base/_typography.scss
resources/scss/components/_navbar.scss
resources/scss/components/_buttons.scss
resources/scss/components/_cards.scss
resources/scss/components/_forms.scss
resources/scss/components/_animations.scss
resources/scss/pages/_home.scss

resources/js/app.js
resources/js/animations.js

lang/ar/site.php
lang/en/site.php
```

If the project already has a different structure, follow the existing structure instead of forcing this one.

## SEO Requirements

Add:

- Localized meta title
- Localized meta description
- Open Graph tags
- Semantic headings
- Proper image alt text
- Clean URLs
- Arabic and English page metadata
- `hreflang` links for Arabic and English

## Content Tone

Arabic tone should be:

- Formal
- Elegant
- Human
- Trustworthy
- Saudi/Haram context appropriate

Use phrases such as:

- ضيوف الرحمن
- تجربة ميسّرة
- تنقّل آمن
- خدمة راقية
- مرافقون مدرّبون
- خصوصية وكرامة
- منظومة تشغيل ذكية
- مركز عمليات
- نقاط خدمة
- رعاية تليق بالمكان والإنسان

## Implementation Rules

1. Analyze first, code second.
2. Use Laravel Boost before making assumptions.
3. Do not remove existing app logic.
4. Do not redesign the mobile app.
5. Build the website as a public marketing platform.
6. Use Bootstrap, not Tailwind.
7. Use Blade components.
8. Use translation files for all visible content.
9. Ensure Arabic is the default.
10. Ensure English localization works.
11. Ensure responsive RTL/LTR behavior.
12. Add subtle luxury animations.
13. Keep code clean, maintainable, and production-ready.

## Final Output Expected From Claude

After implementation, provide:

1. Summary of completed work.
2. List of changed/created files.
3. How to run the project.
4. How to compile assets.
5. How localization works.
6. How animations work.
7. Any pending items or placeholders.
