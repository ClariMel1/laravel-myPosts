<x-app-layout  :categories="$categories">
    <x-header-categories />

    <x-main>
        <x-title> {{ __('Posts más recientes') }}</x-title>
        <x-lista-posts :posts="$posts" />
    
    <!--paginacion-->
    <div class="pagination">
            {{ $posts->appends(request()->query())->links() }}
        </div>
    </x-main>
</x-app-layout>
