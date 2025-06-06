<x-app-layout  :categories="$categories">
    <x-header-categories />

    <x-main>
        <x-title> {{ __('All Posts') }}</x-title>
        <x-lista-posts :posts="$posts" />
    </x-main>

</x-app-layout>
