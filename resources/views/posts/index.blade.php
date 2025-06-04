<x-app-layout>
        <x-slot name="header">
        <h2 class="font-semibold text-xl  leading-tight">
            {{ __('Listado de Posts') }}
        </h2>
    </x-slot>

<div class="max-w-4xl mx-auto sm:px-6 lg:px-8  p-1 rounded shadow">
    @if($posts->count())
    <ul class="list-none list-inside space-y-2">
        @foreach ($posts as $post)
            <article class="w-full h-80 bg-cover bg-center" style="background-image: url('{{ $post->poster }}')">
                <a href="{{ url('posts/' . $post->id) }}" class="text-white cursor-pointer bg-black px-2 py-2 ml-2 mt-2">
                    {{ $post->title }}
                </a>
                <p class="text-gray-600">Publicado por: {{ $post->user->name }}</p>
            @if ($post->user_id === auth()->id())
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Editar</a>
            @endif
            </article>
        @endforeach
    </ul>
    @else
        <p class="text-gray-500">No hay Posts para mostrar.</p>
    @endif
</div>
</x-app-layout>