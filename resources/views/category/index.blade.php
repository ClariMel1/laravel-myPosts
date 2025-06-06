<x-app-layout>
<div>
    <x-title> {{ __('Listado de categorias') }}</x-title>

    <x-lista-categorias :categories="$categories" />

    <a href="{{ route('categories.create') }}"
       class="bg-white text-black px-6 py-1 rounded-full text-sm border border-transparent uppercase inline-block hover:bg-gray-100">
        {{ __('+ Añadir nueva categoría') }}
    </a>
</div>
</x-app-layout>

