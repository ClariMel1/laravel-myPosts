@extends('layouts.app')

@section('title', 'Detalle del Post')

@section('content')
    <h1 class="text-2xl font-bold mb-4">{{ $post->title }}</h1>
    <p><strong>Autor:</strong> {{ $post->poster }}</p>
    <p><strong>Habilitado:</strong> {{ $post->habilitated ? 'Sí' : 'No' }}</p>
    <p class="mt-4">{{ $post->content }}</p>
    <p class="text-sm text-gray-500 mt-4">Creado: {{ $post->created_at }}</p>
@endsection