# Laravel Localization & RTL Skill

## Purpose

Use this skill to implement Arabic-first localization and RTL/LTR behavior in Laravel 13.

## Main Rule

Arabic is the default and main language.
English is a localized secondary language.

## Required Locales

- `ar` default
- `en` secondary

## URL Structure

Use locale-prefixed URLs:

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

If the user visits `/`, redirect to `/ar`.

## Translation Files

Use:

```txt
lang/ar/site.php
lang/en/site.php
```

All visible text must come from translation files.

Do not hardcode visible UI text in Blade files.

## HTML Direction

The layout must include:

```blade
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
```

## Middleware

Create or use locale middleware that:

1. Reads `{locale}` from the route.
2. Validates that locale is `ar` or `en`.
3. Falls back to `ar` when invalid or missing.
4. Calls `app()->setLocale($locale)`.

## Routing Pattern

Suggested approach:

```php
Route::get('/', function () {
    return redirect('/ar');
});

Route::prefix('{locale}')
    ->whereIn('locale', ['ar', 'en'])
    ->middleware('setLocale')
    ->group(function () {
        Route::view('/', 'pages.home')->name('home');
        Route::view('/services', 'pages.services')->name('services');
        Route::view('/about', 'pages.about')->name('about');
        Route::view('/electric-cart', 'pages.electric-cart')->name('electric-cart');
        Route::view('/operations', 'pages.operations')->name('operations');
        Route::view('/contact', 'pages.contact')->name('contact');
    });
```

Adjust to the existing project conventions if needed.

## Language Switcher

Provide a language switcher that:

- Switches Arabic to English and English to Arabic.
- Keeps the current page path when possible.
- Shows Arabic as العربية and English as English.
- Uses proper direction and alignment.

## Bootstrap RTL

For Arabic:

- Ensure Bootstrap works in RTL.
- Use Bootstrap RTL build if available.
- Or add custom RTL corrections in SCSS.

For English:

- Ensure normal LTR behavior.

## SEO Localization

Every page should have localized:

- Title
- Meta description
- Open Graph title
- Open Graph description
- Image alt text
- `hreflang` links

## Testing Checklist

Test:

- `/` redirects to `/ar`
- `/ar` loads Arabic RTL
- `/en` loads English LTR
- Navbar alignment
- Buttons alignment
- Forms alignment
- Language switcher
- Meta tags
- Translation coverage
- No hardcoded visible text remains in Blade files
