<div class="py-5 w-full">
    @auth()
    <a href="{{ route('posts.create') }}" class="bg-white text-black px-8 py-2 rounded-full text-center items-center border-2 border-[#732255] uppercase inline-block">
        {{ __('+Añadir Post') }}
    </a>
    @endauth
    <div class="py-5">
        <div class="max-w-6xl grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($posts as $post)
            <div class="bg-white  bg-gray-100 dark:bg-gray-900 rounded-lg shadow-md overflow-hidden">
                <!-- Header: Usuario -->
                <div class="flex items-center p-4">
                    <p class="text-sm font-semibold text-gray-800 dark:text-gray-200 px-2">{{ $post->user->name }}</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400">{{ $post->created_at->diffForHumans() }}</p>
                </div>

                <!-- Imagen -->
                <img src="{{ $post->poster }}" alt="{{ $post->title }}" class="w-full h-60 object-cover">

                <!-- Contenido -->
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-1">
                        {{ $post->title }}
                    </h3>
                    <p class="text-sm text-gray-700 dark:text-gray-300 line-clamp-3">
                        {{ $post->content }}
                    </p>

                    <!-- Categoría y Ver más -->
                    <div class="mt-3 flex justify-between items-center text-sm text-gray-600 dark:text-gray-400">
                        <span>#{{ $post->category->name }}</span>
                        <a href="{{ route('posts.show', $post->id) }}" class="text-blue-600 hover:underline">Ver más</a>
                    </div>
                </div>
            </div>
            @endforeach

            @if ($posts->isEmpty())
            <p class="text-gray-600 dark:text-gray-300">No hay publicaciones disponibles.</p>
            @endif
        </div>
    </div>
</div>
