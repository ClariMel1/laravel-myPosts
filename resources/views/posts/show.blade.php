<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Post Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <h3 class="text-3xl font-semibold text-gray-800 dark:text-gray-200">{{ $post->title }}</h3>
                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Category: {{ $post->category->name }}</p>
                <span class="text-sm text-gray-500 dark:text-gray-400">{{ $post->created_at->diffForHumans() }}</span>
                <img src="{{ $post->poster }}" alt="{{ $post->title }}"
                    class="mt-4 rounded-md shadow-sm h-64 w-full object-cover">
                <p class="text-gray-600 dark:text-gray-300 mt-4">{{ $post->content }}</p>

                <p class="mt-4 text-sm text-gray-500 dark:text-gray-400">Author: {{ $post->user->name }}</p>
                @if ($post->user_id === Auth::id())
                    <div class="mt-8">
                        <a href="{{ route('posts.edit', $post->id) }}" class="text-green-600 hover:underline">Edit</a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="ml-2 text-red-600 hover:underline">Delete</button>
                        </form>
                    </div>
                @endif
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 mt-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <a href="{{ route('posts.index') }}" class="text-blue-600 hover:underline">Back to Posts</a>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
