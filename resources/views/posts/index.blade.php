<x-app-layout>
    <x-header-categories />
    <x-main >
        <h1 class="text-black font-semibold text-3xl  text-white leading-tight"> {{ __('Posts') }}</h1>
        <x-lista-posts :posts="$posts" />
    </x-main>
</x-app-layout>
