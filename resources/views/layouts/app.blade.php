<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'MyPosts') }}</title>
        <link rel="icon" type="image/x-icon" href="https://img.icons8.com/?size=100&id=00TVQmwqn1tZ&format=png&color=000000">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <section class="bg-pink-200 shadow py-4">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <x-lista-categorias :categories="$categories" />
                </div>
            </section>

            <!-- Page Content -->
            <main class="bg-[#ffffff] text-[#ffffff]">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
