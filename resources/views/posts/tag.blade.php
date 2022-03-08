<x-app-layout>
    <div class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-8 py-4">
        <h1 class="uppercase text-center text-3xl text-gray-500  font-bold">Etiqueta {{ $tag->name }} </h1>
        @foreach ($posts as $post)
            <x-cardpost :post='$post'>

            </x-cardpost>
        @endforeach
        <div class="mt-4">
            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>
