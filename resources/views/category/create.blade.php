@extends('layouts.app')

@section('title', 'Crear Categoría')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Crear Nueva Categoría</h1>
    <form action="{{ url('/category/store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-md">
        @csrf
        <div class="mb-4">
            <label for="title" class="block font-semibold mb-2">Título:</label>
            <input type="text" id="title" name="title" class="border rounded w-full p-2" required>
        </div>
        <div class="mb-4">
            <label for="poster" class="block font-semibold mb-2">Autor:</label>
            <input type="text" id="poster" name="poster" class="border rounded w-full p-2" required>
        </div>
        <div class="mb-4">
            <label for="content" class="block font-semibold mb-2">Contenido:</label>
            <textarea id="content" name="content" class="border rounded w-full p-2" rows="5" required></textarea>
        </div>
        <div class="mb-4">
            <label for="image" class="block font-semibold mb-2">Imagen:</label>
            <input type="file" id="image" name="image" class="border rounded w-full p-2" accept="image/*">
        </div>
        <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">Crear Categoría</button>
    </form>
@endsection