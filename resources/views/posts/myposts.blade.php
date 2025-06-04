<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('My Posts') }}
            </h2>
            <div class="flex justify-end">
                <a href="{{ route('posts.create') }}" class="text-blue-500 hover:text-blue-700">
                    {{ __('Create New Post') }}
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @foreach ($posts as $post)
                        <div class="mb-4 p-4 bg-gray-100 dark:bg-gray-700 rounded-lg">
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                                {{ $post->title }}
                            </h3>
                            <img src="{{ $post->poster }}" alt="{{ $post->title }}"
                                class="mt-4 rounded-md shadow-sm h-48 w-full object-cover">
                            <p class="text-gray-600 dark:text-gray-300">{{ $post->content }}</p>
                            <span
                                class="text-sm text-gray-500 dark:text-gray-400">{{ $post->created_at->diffForHumans() }}</span>
                            <span class="ml-2 text-sm text-gray-500 dark:text-gray-400">Category:
                                {{ $post->category->name }}</span>
                            <div class="mt-2">
                                <a href="{{ route('posts.show', $post->id) }}"
                                    class="text-blue-600 hover:underline">View</a>
                                <a href="{{ route('posts.edit', $post->id) }}"
                                    class="text-green-600 hover:underline">Edit</a>
                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST"
                                    class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline ml-2"
                                        onclick="return confirm('Are you sure you want to delete this post?');">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach

                    @if ($posts->isEmpty())
                        <p class="text-gray-500 dark:text-gray-400">No posts available.</p>
                    @endif
                </div>
            </div>


        </div>
    </div>

</x-app-layout>
