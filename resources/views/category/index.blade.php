<div>
    <h1 class="font-semibold text-xl text-white leading-tight mb-4">
        {{ __('Listado de categorías') }}
    </h1>

    @if($categories->count())
        <div class="flex flex-wrap gap-3 mb-4">
            @foreach($categories as $category)
                <div class="flex items-center bg-white rounded-full shadow px-4 py-1 hover:shadow-md transition">
                    <a href="{{ route('categories.show', $category->slug) }}" 
                       class="text-black font-medium text-sm hover:underline">
                        {{ $category->name }}
                    </a>
                    @if ($category->user_id === auth()->id())
                        <a href="{{ route('categories.edit', $category->slug) }}" class="ml-2 text-blue-500">
                            <!-- Ícono de lápiz (Heroicon o SVG genérico) -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 hover:text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                    d="M15.232 5.232l3.536 3.536M9 13l6.586-6.586a2 2 0 112.828 2.828L11.828 16H9v-3z" />
                            </svg>
                        </a>
                    @endif
                </div>
            @endforeach
        </div>
    @else
        <p class="text-gray-300">{{ __('No hay categorías') }}</p>
    @endif

    <a href="{{ route('categories.create') }}" 
       class="bg-white text-black px-6 py-1 rounded-full text-sm border border-transparent uppercase inline-block hover:bg-gray-100">
        {{ __('+ Añadir nueva categoría') }}
    </a>
</div>

