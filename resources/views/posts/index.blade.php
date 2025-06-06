<x-app-layout>
    <div class="flex justify-between items-center">
        <h1 class="font-semibold text-3xl  text-white leading-tight"> {{ __('Posts') }}</h1>

        <a href="{{ route('posts.create') }}" class="bg-white text-black px-8 py-2 rounded-full text-center items-center border-2 border-[#732255] uppercase inline-block">
            {{ __('+Añadir Post') }}
        </a>
    </div>
    <x-lista-posts :posts="$posts" />
</x-app-layout>
