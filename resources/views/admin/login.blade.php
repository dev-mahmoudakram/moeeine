<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin — معين</title>
    @vite(['resources/scss/app.scss'])
</head>
<body class="site-body admin-login-body admin-page">
    <div class="admin-login">
        <div class="admin-login__card">
            <div class="admin-login__brand">
                <img src="{{ Vite::asset('resources/assets/logo.png') }}" alt="معين" class="admin-login__logo">
                <span class="admin-login__title">لوحة الإدارة</span>
            </div>

            @if($errors->any())
                <div class="form-flash form-flash--error">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('admin.authenticate') }}" class="site-form">
                @csrf
                <div class="form-group">
                    <label class="form-label" for="email">البريد الإلكتروني</label>
                    <input type="email" id="email" name="email"
                           class="form-control @error('email') is-invalid @enderror"
                           value="{{ old('email') }}"
                           placeholder="admin@moeeine.com" autofocus>
                </div>
                <div class="form-group mt-3">
                    <label class="form-label" for="password">كلمة المرور</label>
                    <input type="password" id="password" name="password"
                           class="form-control" placeholder="••••••••">
                </div>
                <div class="form-actions" style="border-top:none; padding-top: 1rem;">
                    <button type="submit" class="btn btn-gold w-100">دخول</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
