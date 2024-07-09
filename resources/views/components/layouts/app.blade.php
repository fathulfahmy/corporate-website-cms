<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'IICE' }}</title>

    @filamentStyles
    @vite(['resources/js/app.js', 'resources/js/hide-navbar.js'])
</head>

<body class="bg-white">
    <x-navbar />
    {{ $slot }}
    <x-footer />

    @filamentScripts
</body>

</html>
