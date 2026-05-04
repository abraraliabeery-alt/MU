<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}" data-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', (app()->getLocale() === 'ar' ? 'الميموني' : 'Al-Maimouni'))</title>
    <meta name="description" content="@yield('meta_description', '')">

    <meta property="og:title" content="@yield('og_title', '')">
    <meta property="og:description" content="@yield('og_description', '')">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="{{ app()->getLocale() === 'ar' ? 'ar_SA' : 'en_US' }}">
    <meta property="og:image" content="@yield('og_image', $siteOgImage)">
    <meta property="og:url" content="{{ $siteCurrentUrl }}">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="@yield('og_image', $siteOgImage)">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=plus-jakarta-sans:400,500,600,700|cairo:400,600,700" rel="stylesheet" />

    <link rel="icon" type="image/png" href="{{ $siteOgImage }}">
    <link rel="apple-touch-icon" href="{{ $siteOgImage }}">

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    @stack('head')
</head>
<body>
    @includeIf('partials.icons')
    @yield('body')
    @stack('scripts')
</body>
</html>
