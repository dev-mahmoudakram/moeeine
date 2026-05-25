<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>طلب خدمة جديد</title>
    <style>
        body { font-family: 'Segoe UI', Arial, sans-serif; background: #f4f4f4; margin: 0; padding: 20px; direction: rtl; }
        .wrapper { max-width: 600px; margin: 0 auto; background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.08); }
        .header { background: #010F0D; padding: 32px 40px; text-align: center; }
        .header h1 { color: #D9B879; margin: 0; font-size: 22px; font-weight: 700; letter-spacing: 0.02em; }
        .header p { color: rgba(248,242,230,0.6); margin: 6px 0 0; font-size: 13px; }
        .body { padding: 36px 40px; }
        .label { font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em; color: #888; margin-bottom: 4px; }
        .value { font-size: 15px; color: #1a1a1a; margin-bottom: 20px; padding-bottom: 20px; border-bottom: 1px solid #f0f0f0; }
        .value:last-child { border-bottom: none; margin-bottom: 0; padding-bottom: 0; }
        .badge { display: inline-block; background: #f0f9f7; color: #003C35; border: 1px solid #b2dbd4; border-radius: 4px; padding: 2px 10px; font-size: 13px; font-weight: 600; }
        .footer { background: #f9f9f9; padding: 20px 40px; text-align: center; font-size: 12px; color: #aaa; border-top: 1px solid #eee; }
        a { color: #D9B879; }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <h1>معين — طلب خدمة جديد</h1>
            <p>{{ now()->format('Y-m-d H:i') }}</p>
        </div>
        <div class="body">
            <div class="label">الاسم</div>
            <div class="value">{{ $contactRequest->name }}</div>

            <div class="label">رقم الهاتف</div>
            <div class="value" dir="ltr" style="text-align:right">{{ $contactRequest->phone }}</div>

            <div class="label">نوع الخدمة</div>
            <div class="value"><span class="badge">{{ $contactRequest->service_type }}</span></div>

            <div class="label">المدينة</div>
            <div class="value">{{ $contactRequest->city }}</div>

            @if($contactRequest->expected_date)
            <div class="label">التاريخ المتوقع</div>
            <div class="value">{{ $contactRequest->expected_date->format('Y-m-d') }}</div>
            @endif

            @if($contactRequest->notes)
            <div class="label">ملاحظات</div>
            <div class="value">{{ $contactRequest->notes }}</div>
            @endif

            <div class="label">اللغة</div>
            <div class="value">{{ $contactRequest->locale === 'ar' ? 'العربية' : 'English' }}</div>
        </div>
        <div class="footer">
            معين | moeeine.com
        </div>
    </div>
</body>
</html>
