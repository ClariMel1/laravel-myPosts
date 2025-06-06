<x-app-layout>
    <div>
        <div class="text-center bg-pink-200 shadow py-4">
        <x-title> {{ __('Listado de categorias') }}</x-title>
        </div>

        <x-lista-categorias :categories="$categories" />

        <div class="flex justify-center mt-4">
        <a href="{{ route('categories.create') }}"
        class="bg-white text-black px-6 py-1 rounded-full text-sm border border-[#732255] uppercase inline-block hover:bg-gray-100 shadow-md">
            {{ __('+ Añadir nueva categoría') }}
        </a>
        </div>
    </div>
</x-app-layout>

