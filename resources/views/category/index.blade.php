@extends('layouts.app')

@section('title', 'Categorías')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Listado de categorías</h1>

    @if($posts->count())
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($posts as $post)
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition">
                    <h2 class="text-xl font-semibold mb-2">{{ $post->title }}</h2>
                    <p class="text-gray-600 mb-2"><span class="font-semibold">Autor:</span> {{ $post->poster }}</p>
                    <p class="text-gray-500 mb-4">{{ Str::limit($post->content, 80) }}</p>
                    <a href="{{ url('category/show/'.$post->id) }}" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">Ver detalle</a>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-gray-500">No hay categorías para mostrar.</p>
    @endif
@endsection