<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => redirect('/ar'));

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
