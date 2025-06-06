<x-app-layout>
<div>
    <h1 class="font-semibold text-xl text-white leading-tight mb-4">
        {{ __('Listado de categorías') }}
    </h1>

    <x-lista-categorias :categories="$categories" />

    <a href="{{ route('categories.create') }}"
       class="bg-white text-black px-6 py-1 rounded-full text-sm border border-transparent uppercase inline-block hover:bg-gray-100">
        {{ __('+ Añadir nueva categoría') }}
    </a>
</div>
</x-app-layout>

