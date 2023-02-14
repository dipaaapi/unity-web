<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="icon" type="image/png" sizes="192x192" href="{{ __('/img/aboutus.png') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        {{-- <link href="/dist/output.css" rel="stylesheet"> --}}
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="antialiased font-sans relative">
        <body>
            <div class="font-sans text-gray-900 antialiased">
                {{ $slot }}
            </div>
        </body>
    </body>
</html>
