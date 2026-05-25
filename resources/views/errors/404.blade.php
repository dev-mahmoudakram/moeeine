@extends('layouts.app')
@section('title', '404 | ' . __('site.footer.company'))

@section('content')
<section class="error-page">
    <div class="container text-center">
        <div class="error-page__code" aria-hidden="true">404</div>
        <h1 class="error-page__title">{{ app()->getLocale() === 'ar' ? 'الصفحة غير موجودة' : 'Page Not Found' }}</h1>
        <p class="error-page__body">
            {{ app()->getLocale() === 'ar'
                ? 'يبدو أن هذه الصفحة لم تعد موجودة أو تم نقلها.'
                : 'This page no longer exists or has been moved.' }}
        </p>
        <a href="{{ route('home', ['locale' => app()->getLocale()]) }}" class="btn btn-gold btn-lg">
            {{ app()->getLocale() === 'ar' ? 'العودة للرئيسية' : 'Back to Home' }}
        </a>
    </div>
</section>
@endsection
