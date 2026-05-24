# Arabic & English Content Skill

## Purpose

Use this skill to write premium Arabic-first and English-localized content for the Haramain mobility service website.

## Main Rule

Arabic is the default language.
English is secondary.

Do not write casual Arabic.
The tone must be formal, premium, human, and suitable for the Haram context.

## Arabic Voice

The Arabic content should feel:

- Elegant
- Respectful
- Human
- Trustworthy
- Official without being cold
- Spiritually aware
- Service-oriented

Use phrases like:

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
- راحة كبار السن وذوي الهمم
- سهولة الوصول
- رحلة أكثر طمأنينة

Avoid:

- Slang
- Over-promising
- Informal expressions
- Claims of official partnership unless confirmed
- Medical-heavy language

## English Voice

English content should be:

- Clear
- Premium
- Professional
- Human
- Suitable for partners and visitors

Use phrases like:

- Guests of Allah
- dignified mobility
- smart operations platform
- trained companions
- accessible journey
- safe and organized movement
- elderly visitors
- visitors with limited mobility
- service points
- operations center

## Core Arabic Headlines

Use or adapt:

- رحلة أيسر لضيوف الرحمن
- تنقّل آمن وراقي داخل الحرمين ومحيطهما
- خدمة ذكية لراحة كبار السن وذوي الهمم
- رعاية تليق بالمكان والإنسان
- منظومة تشغيل متكاملة لخدمات العربات

## Core English Headlines

Use or adapt:

- A More Accessible Journey for the Guests of Allah
- Premium Smart Mobility Around the Holy Mosques
- Dignified Mobility for Elderly Visitors and People with Disabilities
- A Complete Operations Platform for Mobility Services

## Service Names — Arabic

- عربة كهربائية بدون مرافق
- عربة مع مرافق مدرّب
- خدمة الفنادق
- خدمة محطات الباصات والمواقف
- توصيل داخل المنطقة المركزية
- توصيل خارج المنطقة المركزية
- دعم كبار السن وذوي الهمم

## Service Names — English

- Electric Cart Without Companion
- Electric Cart With Trained Companion
- Hotel Mobility Service
- Bus Station and Parking Support
- Central Area Pickup and Delivery
- Outside Central Area Pickup and Delivery
- Elderly and Accessibility Support

## CTA Text — Arabic

- احجز خدمتك الآن
- استكشف الخدمات
- تواصل معنا
- اطلب الخدمة
- اعرف المزيد
- شاهد آلية العمل

## CTA Text — English

- Book Your Service
- Explore Services
- Contact Us
- Request Service
- Learn More
- See How It Works

## Content Structure Rule

For every translation key in Arabic, create the English equivalent.

Use nested arrays in `lang/ar/site.php` and `lang/en/site.php`.

Suggested sections:

```php
return [
    'meta' => [],
    'nav' => [],
    'hero' => [],
    'stats' => [],
    'about' => [],
    'services' => [],
    'cart' => [],
    'how_it_works' => [],
    'operations' => [],
    'app_preview' => [],
    'experience' => [],
    'partnership' => [],
    'contact' => [],
    'footer' => [],
];
```

## Quality Checklist

- Arabic is not a literal translation from English.
- English is not overly verbose.
- No hardcoded visible text in Blade files.
- CTA labels are localized.
- Form labels are localized.
- Image alt text is localized.
- SEO metadata is localized.
