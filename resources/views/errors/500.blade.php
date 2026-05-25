@extends('layouts.app')
@section('title', '500 | ' . __('site.footer.company'))

@section('content')
<section class="error-page">
    <div class="container text-center">
        <div class="error-page__code" aria-hidden="true">500</div>
        <h1 class="error-page__title">{{ app()->getLocale() === 'ar' ? 'خطأ في الخادم' : 'Server Error' }}</h1>
        <p class="error-page__body">
            {{ app()->getLocale() === 'ar'
                ? 'حدث خطأ غير متوقع. يرجى المحاولة لاحقاً.'
                : 'An unexpected error occurred. Please try again later.' }}
        </p>
        <a href="{{ route('home', ['locale' => app()->getLocale()]) }}" class="btn btn-gold btn-lg">
            {{ app()->getLocale() === 'ar' ? 'العودة للرئيسية' : 'Back to Home' }}
        </a>
    </div>
</section>
@endsection
