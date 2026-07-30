<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? config('lawoffice.office.name').' | الإسكندرية' }}</title>
    <meta name="description" content="{{ $description ?? config('lawoffice.office.description') }}">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta property="og:locale" content="ar_EG"><meta property="og:type" content="website"><meta property="og:title" content="{{ $title ?? config('lawoffice.office.name') }}"><meta property="og:description" content="{{ $description ?? config('lawoffice.office.description') }}"><meta property="og:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary_large_image">
    <script type="application/ld+json">{!! json_encode(['@context' => 'https://schema.org', '@type' => 'LegalService', 'name' => config('lawoffice.office.name'), 'description' => config('lawoffice.office.description'), 'address' => ['@type' => 'PostalAddress', 'addressLocality' => 'الإسكندرية', 'addressCountry' => 'EG']], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}</script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-ivory text-ink antialiased" x-data="{ open: false, scrolled: false }" @scroll.window="scrolled = window.scrollY > 12">
    <x-site-header />
    <main>{{ $slot }}</main>
    <x-site-footer />
</body>
</html>
