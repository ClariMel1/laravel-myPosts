<x-app-layout  :categories="$categories">
    <x-header-categories />

    <x-main>
        <h1 class="text-black font-semibold text-3xl leading-tight"> {{ __('Posts') }}</h1>
        <x-lista-posts :posts="$posts" />
    </x-main>

</x-app-layout>
