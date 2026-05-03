<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}" data-theme="light" data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', (app()->getLocale() === 'ar' ? 'لوحة التحكم' : 'Admin'))</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=plus-jakarta-sans:400,500,600,700|cairo:400,600,700" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap{{ app()->getLocale() === 'ar' ? '.rtl' : '' }}.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet" crossorigin="anonymous">

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    @stack('head')
</head>
<body class="bg-body-tertiary">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #111a3a;">
        <div class="container-fluid px-3 px-lg-4">
            <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('admin.contact-messages.index') }}">
                <img src="{{ asset('images/image (3).png') }}" alt="{{ app()->getLocale() === 'ar' ? 'الشعار' : 'Logo' }}" style="height: 36px; width: auto;" class="rounded">
                <span>{{ app()->getLocale() === 'ar' ? 'لوحة التحكم' : 'Admin' }}</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNavbar" aria-controls="adminNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="adminNavbar">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.contact-messages.index') }}">{{ app()->getLocale() === 'ar' ? 'رسائل التواصل' : 'Messages' }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('landing') }}">{{ app()->getLocale() === 'ar' ? 'زيارة الموقع' : 'View site' }}</a>
                    </li>
                </ul>

                <div class="d-flex align-items-center gap-2">
                    <button type="button" class="btn btn-outline-light btn-sm" id="adminThemeToggle" title="{{ app()->getLocale() === 'ar' ? 'تبديل الثيم' : 'Toggle theme' }}" aria-label="{{ app()->getLocale() === 'ar' ? 'تبديل الثيم' : 'Toggle theme' }}">
                        <span data-theme-icon="dark" class="d-inline-flex align-items-center justify-content-center" style="width: 1.1rem; height: 1.1rem;">
                            <i class="fa-solid fa-moon" aria-hidden="true"></i>
                        </span>
                        <span data-theme-icon="light" class="d-none align-items-center justify-content-center" style="width: 1.1rem; height: 1.1rem;">
                            <i class="fa-solid fa-sun" aria-hidden="true"></i>
                        </span>
                        <span class="visually-hidden">{{ app()->getLocale() === 'ar' ? 'تبديل الثيم' : 'Toggle theme' }}</span>
                    </button>

                    <a href="{{ request()->fullUrlWithQuery(['lang' => app()->getLocale() === 'ar' ? 'en' : 'ar']) }}" class="btn btn-outline-light btn-sm" title="{{ app()->getLocale() === 'ar' ? 'English' : 'العربية' }}" aria-label="{{ app()->getLocale() === 'ar' ? 'English' : 'العربية' }}">
                        <span class="d-inline-flex align-items-center justify-content-center" style="width: 1.1rem; height: 1.1rem;">
                            <i class="fa-solid fa-globe" aria-hidden="true"></i>
                        </span>
                        <span class="visually-hidden">{{ app()->getLocale() === 'ar' ? 'English' : 'العربية' }}</span>
                    </a>

                    @yield('header_actions')

                    @if (request()->routeIs('admin.contact-messages.*'))
                        <form method="POST" action="{{ route('admin.logout') }}" class="mb-0">
                            @csrf
                            <button type="submit" class="btn btn-light btn-sm">{{ app()->getLocale() === 'ar' ? 'تسجيل خروج' : 'Logout' }}</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <main class="container-fluid px-3 px-lg-4 py-4">
        <div class="mb-3">
            <div class="text-secondary small">{{ app()->getLocale() === 'ar' ? 'الإدارة' : 'Administration' }}</div>
            <h1 class="h4 mb-0">@yield('page_title')</h1>
        </div>

        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script>
        (function () {
            var storageKey = 'admin_theme';
            var defaultTheme = 'light';
            var root = document.documentElement;
            var btn = document.getElementById('adminThemeToggle');

            function applyTheme(theme) {
                var t = theme === 'dark' ? 'dark' : 'light';
                root.setAttribute('data-bs-theme', t);

                if (btn) {
                    var isDark = t === 'dark';
                    var darkIcon = btn.querySelector('[data-theme-icon="dark"]');
                    var lightIcon = btn.querySelector('[data-theme-icon="light"]');
                    if (darkIcon && lightIcon) {
                        if (isDark) {
                            darkIcon.classList.add('d-none');
                            darkIcon.classList.remove('d-inline-flex');
                            lightIcon.classList.remove('d-none');
                            lightIcon.classList.add('d-inline-flex');
                        } else {
                            lightIcon.classList.add('d-none');
                            lightIcon.classList.remove('d-inline-flex');
                            darkIcon.classList.remove('d-none');
                            darkIcon.classList.add('d-inline-flex');
                        }
                    }
                }
            }

            var saved = null;
            try { saved = localStorage.getItem(storageKey); } catch (e) {}
            applyTheme(saved || defaultTheme);

            if (btn) {
                btn.addEventListener('click', function () {
                    var current = root.getAttribute('data-bs-theme') || defaultTheme;
                    var next = current === 'dark' ? 'light' : 'dark';
                    try { localStorage.setItem(storageKey, next); } catch (e) {}
                    applyTheme(next);
                });
            }
        })();
    </script>
    @stack('scripts')
</body>
</html>
