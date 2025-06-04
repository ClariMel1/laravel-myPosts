<x-app-layout>
    <div class="flex max-w-6xl mx-auto pt-20 px-6 gap-8 min-h-screen" style="height:calc(100vh - 6rem);">
            <aside class="w-[30%] h-[calc(100vh-6rem)] bg-white dark:bg-[#B2C6D5] rounded-lg shadow p-4 flex flex-col">
                @include('category.index', ['categories' => $categories])
            </aside>

            <main class="w-[70%] h-[calc(100vh-6rem)] bg-white dark:bg-[#B2C6D5] rounded-lg shadow p-6 flex flex-col">
                @include('posts.index', ['posts' => $posts])
            </main>
        </div>
</x-app-layout>