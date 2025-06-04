<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My post</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="bg-[#ffffff] dark:bg-[#E7F2E4] text-[#ffffff] min-h-screen">
        <header class="fixed top-0 left-0 w-full z-50 bg-[#FDFDFC] dark:bg-[#732255] shadow text-[#E7F2E4]">
            <div class="max-w-6xl mx-auto flex justify-between items-center py-4 px-6">
                <div class="font-bold text-lg">Mi Blog</div>
                <nav class="flex items-center gap-4">
                    @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="px-4 py-2 rounded transition hover:text-[#d493bc]">Cerrar sesión</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="px-4 py-2 rounded transition hover:text-[#d493bc]">Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="px-4 py-2 rounded transition hover:text-[#d493bc]">Registrarse</a>
                        @endif
                    @endauth
                </nav>
            </div>
        </header>
        
        <div class="flex max-w-6xl mx-auto pt-24 px-6 gap-8 min-h-screen" style="height:calc(100vh - 6rem);">
            <aside class="w-[30%] h-[calc(100vh-6rem)] bg-white dark:bg-[#B2C6D5] rounded-lg shadow p-4 flex flex-col">
                <h2 class="font-semibold mb-4">Categorías</h2>
                <ul class="space-y-2 flex-1">
                    <li><a href="#" class="hover:underline">Categoría 1</a></li>
                    <li><a href="#" class="hover:underline">Categoría 2</a></li>
                    <li><a href="#" class="hover:underline">Categoría 3</a></li>
                    <li><a href="#" class="hover:underline">Categoría 4</a></li>
                    <li><a href="#" class="hover:underline">Categoría 5</a></li>
                </ul>
            </aside>

            <main class="w-[70%] h-[calc(100vh-6rem)] bg-white dark:bg-[#B2C6D5] rounded-lg shadow p-6 flex flex-col">
                <h1 class="text-2xl font-bold mb-4 text-center">Posts</h1>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="rounded-lg border border-gray-200 dark:border-gray-700 p-6 min-h-[180px] w-full max-w-[420px] flex flex-col justify-between shadow hover:shadow-lg transition bg-white dark:bg-[#732255]">
                        <div>
                            <div class="font-semibold mb-2">Post 1</div>
                            <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">Descripción</p>
                        </div>
                        <div class="flex gap-2 mt-4 items-center">
                            <a href="#" class="px-1 py-1 rounded bg-[#3e5d82] text-white hover:bg-[#318cfa] text-sm transition">Detalles</a>
                            @auth
                                <a href="#" class="px-1 py-1 rounded bg-[#fdbe66] text-white hover:bg-[#ee9415] text-sm transition">Editar</a>
                                <form action="#" method="POST" class="flex items-center p-0 m-0">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-1 py-1 rounded bg-[#E55050] text-white hover:bg-red-700 text-sm transition border-0">Eliminar</button>
                                </form>
                            @endauth
                        </div>
                    </div>
                    <div class="rounded-lg border border-gray-200 dark:border-gray-700 p-6 min-h-[180px] w-full max-w-[420px] flex flex-col justify-between shadow hover:shadow-lg transition bg-white dark:bg-[#732255]">
                        <div>
                            <div class="font-semibold mb-2">Post 2</div>
                            <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">Descripción</p>
                        </div>
                        <div class="flex gap-2 mt-4 items-center">
                            <a href="#" class="px-1 py-1 rounded bg-[#3e5d82] text-white hover:bg-[#318cfa] text-sm transition">Detalles</a>
                            @auth
                                <a href="#" class="px-1 py-1 rounded bg-[#fdbe66] text-white hover:bg-[#ee9415] text-sm transition">Editar</a>
                                <form action="#" method="POST" class="flex items-center p-0 m-0">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-1 py-1 rounded bg-[#E55050] text-white hover:bg-red-700 text-sm transition border-0">Eliminar</button>
                                </form>
                            @endauth
                        </div>
                    </div>
                    
                </div>
            </main>
        </div>
    </body>
</html>