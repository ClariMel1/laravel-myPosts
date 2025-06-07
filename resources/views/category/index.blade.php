<x-app-layout>
    <div>
        <div class="text-center bg-pink-200 shadow py-4">
        <x-title> {{ __('Listado de categorias') }}</x-title>
        </div>

        <x-lista-categorias :categories="$categories" />

        <div class="flex justify-center mt-4">
        <a href="{{ route('categories.create') }}"
        class="bg-white text-[#732255] font-bold px-8 py-2 rounded-full text-center items-center border-2 border-[#732255] shadow-lg uppercase inline-block hover:bg-[#732255] hover:text-white transition duration-200 mb-6">
            {{ __('+ Añadir nueva categoría') }}
            
        </a>
        </div>
    </div>
</x-app-layout>

