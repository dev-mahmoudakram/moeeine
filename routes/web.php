<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => redirect('/ar'));

Route::get('/robots.txt', function () {
    return response("User-agent: *\nAllow: /\nSitemap: " . url('/sitemap.xml') . "\n", 200)
        ->header('Content-Type', 'text/plain');
});

Route::get('/sitemap.xml', function () {
    $pages = ['', '/services', '/about', '/electric-cart', '/operations', '/contact'];
    $locales = ['ar', 'en'];

    $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

    foreach ($locales as $locale) {
        foreach ($pages as $page) {
            $loc      = url("/{$locale}{$page}");
            $priority = $page === '' ? '1.0' : '0.8';
            $xml .= "  <url><loc>{$loc}</loc><changefreq>monthly</changefreq><priority>{$priority}</priority></url>\n";
        }
    }

    $xml .= '</urlset>';

    return response($xml, 200)->header('Content-Type', 'application/xml');
});

Route::prefix('{locale}')
    ->whereIn('locale', ['ar', 'en'])
    ->middleware('setLocale')
    ->group(function () {
        Route::view('/',              'pages.home')->name('home');
        Route::view('/services',      'pages.services')->name('services');
        Route::view('/about',         'pages.about')->name('about');
        Route::view('/electric-cart', 'pages.electric-cart')->name('electric-cart');
        Route::view('/operations',    'pages.operations')->name('operations');
        Route::view('/contact',       'pages.contact')->name('contact');

        Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
    });
