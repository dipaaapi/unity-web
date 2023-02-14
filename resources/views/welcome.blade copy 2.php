<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Unity Game Development Training Program</title>
        <link rel="icon" type="image/png" sizes="192x192" href="{{ __('/img/aboutus.png') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="/dist/output.css" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>

        <style>
            @keyframes lightning {
            0% {
                transform: translate(-50%, 100%) scale(0);
                opacity: 0;
            }
            100% {
                transform: translate(-50%, -50%) scale(1);
                opacity: 1;
            }
            }
            .light {
                width: 60px;
                top: -15vh;
                left: 51.5%;
                z-index: 0;
                position: absolute;
                transform: translate(-50%, 100%);
                opacity: 0;
                animation: lightning .2s ease-in-out infinite;
            }
            @media (max-width: 767px) {
                .light { left: 55%; }
                .title_img { left: 32%; }
            }
            @media (min-width: 768px) {
                .light { left: 51.5%; }
                .title_img { top: 20vh; }
            }
            .title_img {
                top: 30vh;
                left: 50%;
                z-index: 1;
                position: absolute;
                transform: translate(-50%, -50%);
            }
        </style>
    </head>
    <body class="antialiased font-sans relative">       
        <div class="mx-auto pt-8 w-10/12 md:w-1/2">
            <img src="{{ __('/img/seal.png') }}" alt="seal" class="mx-auto w-48">
            <img src="{{ __('/img/title.png') }}" alt="title" class="md:w-1/2 mx-auto">
        </div>
        <p class="text-center font-black uppercase text-3xl md:text-4xl text-[#1D38A9]">game development</p>
        <p class="text-center font-black uppercase text-2xl md:text-3xl text-[#1D38A9]">training program</p>
        <div class="relative flex items-top justify-center ark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 hover:underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 hover:underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="title_image">
                <img src="{{ __('/img/light.png') }}" alt="group" class="light">
                <img src="{{ __('/img/group.png') }}" alt="group" class="title_img md:w-1/4 sm:w-10/12">
            </div>
        </div>
    </body>
</html>
