<x-app-layout>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8  p-6 rounded shadow text-white">
            <h2 class="text-xl font-bold mb-4">Posts en: {{ $category->name }}</h2>

            @if($posts->count())
                @include('posts.index', ['posts' => $posts])
            @else
                <p>No hay posts en esta categoría aún.</p>
            @endif
        </div>
    </div>
</x-app-layout>