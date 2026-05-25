<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الطلبات — Admin معين</title>
    @vite(['resources/scss/app.scss'])
</head>
<body class="site-body admin-page">
<div class="admin-panel">

    {{-- Sidebar --}}
    <aside class="admin-sidebar">
        <div class="admin-sidebar__brand">
            <img src="{{ Vite::asset('resources/assets/logo.png') }}" alt="معين" class="admin-sidebar__logo">
            <span>لوحة الإدارة</span>
        </div>
        <nav class="admin-sidebar__nav">
            <a href="{{ route('admin.contacts') }}"
               class="admin-sidebar__link {{ !$status ? 'active' : '' }}">
                <span>كل الطلبات</span>
                <span class="admin-sidebar__badge">{{ $counts['all'] }}</span>
            </a>
            <a href="{{ route('admin.contacts', ['status' => 'new']) }}"
               class="admin-sidebar__link {{ $status === 'new' ? 'active' : '' }}">
                <span>جديد</span>
                <span class="admin-sidebar__badge admin-sidebar__badge--new">{{ $counts['new'] }}</span>
            </a>
            <a href="{{ route('admin.contacts', ['status' => 'read']) }}"
               class="admin-sidebar__link {{ $status === 'read' ? 'active' : '' }}">
                <span>مقروء</span>
                <span class="admin-sidebar__badge">{{ $counts['read'] }}</span>
            </a>
            <a href="{{ route('admin.contacts', ['status' => 'done']) }}"
               class="admin-sidebar__link {{ $status === 'done' ? 'active' : '' }}">
                <span>مكتمل</span>
                <span class="admin-sidebar__badge">{{ $counts['done'] }}</span>
            </a>
        </nav>
        <form method="POST" action="{{ route('admin.logout') }}" class="admin-sidebar__logout">
            @csrf
            <button type="submit" class="admin-sidebar__logout-btn">تسجيل الخروج</button>
        </form>
    </aside>

    {{-- Main --}}
    <main class="admin-main">
        <header class="admin-header">
            <h1 class="admin-header__title">طلبات التواصل</h1>
            <span class="admin-header__count">{{ $contacts->total() }} طلب</span>
        </header>

        @if($contacts->isEmpty())
            <div class="admin-empty">لا توجد طلبات.</div>
        @else
        <div class="admin-table-wrap">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>الاسم</th>
                        <th>الهاتف</th>
                        <th>الخدمة</th>
                        <th>المدينة</th>
                        <th>التاريخ</th>
                        <th>ملاحظات</th>
                        <th>الحالة</th>
                        <th>وقت الطلب</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contacts as $contact)
                    <tr class="admin-table__row admin-table__row--{{ $contact->status }}">
                        <td class="admin-table__name">{{ $contact->name }}</td>
                        <td dir="ltr" class="admin-table__phone">{{ $contact->phone }}</td>
                        <td>{{ $contact->service_type }}</td>
                        <td>{{ $contact->city }}</td>
                        <td>{{ $contact->expected_date?->format('Y-m-d') ?? '—' }}</td>
                        <td class="admin-table__notes">{{ Str::limit($contact->notes, 60) ?: '—' }}</td>
                        <td>
                            <form method="POST"
                                  action="{{ route('admin.contacts.status', $contact) }}">
                                @csrf
                                <select name="status" class="admin-status-select"
                                        onchange="this.form.submit()">
                                    <option value="new"  {{ $contact->status === 'new'  ? 'selected' : '' }}>جديد</option>
                                    <option value="read" {{ $contact->status === 'read' ? 'selected' : '' }}>مقروء</option>
                                    <option value="done" {{ $contact->status === 'done' ? 'selected' : '' }}>مكتمل</option>
                                </select>
                            </form>
                        </td>
                        <td class="admin-table__date">{{ $contact->created_at->format('Y-m-d H:i') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="admin-pagination">
            {{ $contacts->withQueryString()->links() }}
        </div>
        @endif
    </main>
</div>
</body>
</html>
