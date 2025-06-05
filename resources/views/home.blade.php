<x-app-layout  :categories="$categories">
    <div class="max-w-7xl mx-auto p-20 gap-8 ">

        <main class="bg-white dark:bg-[#B2C6D5] rounded-lg shadow p-6 flex flex-col">
            @include('posts.index', ['posts' => $posts])
        </main>
    </div>
</x-app-layout>