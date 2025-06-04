<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl  leading-tight">
            {{ __('Listado de categorías') }}
        </h2>
    </x-slot>

    @if($categories->count())
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($categories as $category)
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition">
                    <h2 class="text-xl font-semibold mb-2">{{ $category->name }}</h2>
                    <p class="text-gray-600 mb-2"><span class="font-semibold">Autor:</span> {{ $category->user_id }}</p>
                    <p class="text-gray-500 mb-4">{{ Str::limit($category->description, 80) }}</p>
                    <a href="{{ url('category/show/'.$category->slug) }}" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">Ver detalle</a>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-gray-500">No hay categorías para mostrar.</p>
    @endif
</x-app-layout>