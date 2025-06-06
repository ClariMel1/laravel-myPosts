<x-app-layout>
    <x-header-categories />
    <x-main>
        <h2 class="text-black text-xl font-bold mb-4">Posts en: {{ $category->name }}</h2>

        @if($posts->count())
            <x-lista-posts :posts="$posts" />
        @else
            <p class="text-pink-300">No hay posts en esta categoría aún.</p>
        @endif
    </x-main>
</x-app-layout>