<x-app-layout>
    <div class="mx-auto max-w-4xl py-5">
        <h1 class="font-semibold text-xl  text-white leading-tight"> {{ __('Listado de categorías') }}<h1>

    @if($categories->count())
        <div class="w-full py-4">
            @foreach($categories as $category)
            <div class="bg-white rounded-lg shadow-md px-5 py-2 mt-5 hover:shadow-lg transition">
                <div class="flex items-center justify-between mb-2">
                    <a href="{{  route('categories.show', $category->slug) }}" class="font-bold text-2xl cursor-pointer">
                        {{ $category->name }}
                    </a>
                    @if ($category->user_id === auth()->id())
                    <a href="{{ route('categories.edit', $category->slug) }}" class="text-blue-500 hover:underline ml-4">
                        Editar
                    </a>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    @else
        <p class="text-gray-500">{{__('No hay categorias') }}</p>
    @endif

    <a href="{{ route('categories.create') }}" class="bg-white text-black px-8 py-2 rounded-full text-center items-center border border-transparent uppercase inline-block">
        {{__('+ Añadir nueva categoría') }}
    </a>
    </div>
</x-app-layout>