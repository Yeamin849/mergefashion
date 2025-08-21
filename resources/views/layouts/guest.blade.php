<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex, nofollow"> <!-- Prevents indexing and following -->

    <title>{{ config('app.name', 'Octosync Software Ltd') }}</title>

    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}

    <!-- Scripts -->
    <!--@vite(['resources/css/app.css', 'resources/js/app.js'])-->

    <link rel="preload" as="style" href="{{ asset('build/assets/app-ad555dc9.css') }}" />
    <link rel="stylesheet" href="{{ asset('build/assets/app-ad555dc9.css') }}" />
    <link rel="modulepreload" href="{{ asset('build/assets/preline-90866586.js') }}" />
    <script type="module" src="{{ asset('build/assets/preline-90866586.js') }}"></script>
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <div>
            <a href="/" class="font-bold sm:text-4xl text-teal-600">
                {{ config('app.name', 'Octosync Software Ltd') }}
            </a>
        </div>

        <div
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
