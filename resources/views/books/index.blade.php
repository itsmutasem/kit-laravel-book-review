<x-layout :title="'Books'">
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div class="flex justify-end mb-4">
                <a href="{{ route('books.create') }}" class="text-green-500 font-semibold border-2 border-green-600 px-3 py-1 rounded-md hover:bg-green-950">Create</a>
            </div>
            @forelse ($books as $book)
            <div class="bg-neutral-800/30 p-8 rounded-md grid grid-cols-6 gap-4 mb-4 shadow-lg shadow-black/50">
                <div class="col-start-1 col-end-3">
                    <h1 class="text-white text-2xl font-bold mb-3">{{ $book->title }}</h1>
                    <p class="text-white/50 text-sm">Author: {{ $book->author }}</p>
                </div>
                <div class="flex-inline justify-self-end col-span-2 col-end-7 mt-5 space-x-4">
                    <a href="" class="text-blue-500">Edit</a>
                    <a href="" class="text-red-500">Delete</a>
                </div>
            </div>
            @empty
                <h1 class="text-white text-2xl font-bold mb-3">No books yet!</h1>
            @endforelse

        </div>

    </main>
</x-layout>
