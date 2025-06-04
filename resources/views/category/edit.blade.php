<x-app-layout>
    <div class="mx-auto max-w-4xl py-5">
    <div class="max-w-4xl mx-auto px-0 flex flex-col md:flex-row rounded shadow overflow-hidden" style="min-height: 400px;">
        <form action="{{ route('categories.update', $category->slug) }}" method="POST" class="bg-[#1e1e1e] w-full px-12 py-8 overflow-auto transition-all duration-300" id="formSection">
        @csrf
        @method('PUT')

        <div class="relative mb-6">
            <input
                type="text"
                name="name"
                value="{{ old('name', $category->name ?? '') }}"
                placeholder="Nombre de la Categoria"
                class="w-full text-white text-xl font-semibold bg-transparent placeholder-gray-500 border-none outline-none ring-0 focus:ring-0 focus:outline-none focus:border-none transition-all duration-300"
                autocomplete="off"
                autofocus
            />
        </div>

        <div class="relative mb-6">
            <textarea
                name="description"
                rows="4"
                placeholder="¿De qué tratará esta sección?..."
                class="w-full text-white text-sm bg-transparent placeholder-gray-500 border-none outline-none ring-0 focus:ring-0 focus:outline-none focus:border-none transition-all duration-300"
                autocomplete="off"
            >{{ old('description', $category->description ?? '') }}</textarea>
        </div>

        <div class="flex justify-between items-center mt-6">
            <x-button>
                {{ __('Actualizar categoría') }}
            </x-button>
            <a href="{{ route('categories.destroy') }}" class="border border-white text-white px-8 py-2 rounded-full cursor-pointer text-center items-center uppercase">
                {{ __('Eliminar categoría') }}
            </a>
        </div>
        </form>
    </div>
    <div>
</x-app-layout>