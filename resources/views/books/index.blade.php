<x-layout :title="'Books'">
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            @if (session('create'))
            <div>
                    <p class="text-green-500 font-semibold border-2 border-green-600 px-3 py-1 rounded-md bg-green-950">
                        {{ session('create') }}
                    </p>
            </div>
            @elseif (session('update'))
            <div>
                    <p class="text-blue-500 font-semibold border-2 border-blue-600 px-3 py-1 rounded-md bg-blue-950">
                        {{ session('update') }}
                    </p>
            </div>
            @elseif (session('delete'))
            <div>
                    <p class="text-red-500 font-semibold border-2 border-red-600 px-3 py-1 rounded-md bg-red-950">
                        {{ session('delete') }}
                    </p>
            </div>
            @endif 
            <div class="flex justify-end mb-4">
                <a href="{{ route('books.create') }}" class="text-green-500 font-semibold border-2 border-green-600 px-3 py-1 rounded-md hover:bg-green-950">Create</a>
            </div>
            @forelse ($books as $book)
            <div class="bg-neutral-800/30 p-8 rounded-md grid grid-cols-6 gap-4 mb-4 shadow-lg shadow-black/50">
                <div class="col-start-1 col-end-3">
                    <a href="{{  route('books.show', $book->id) }}" class="text-white text-2xl font-bold mb-3">{{ $book->title }}</h1>
                    <p class="text-white/50 text-sm">Author: {{ $book->author }}</p>
                </div>
                <div class="flex-inline justify-self-end col-span-2 col-end-7 mt-5 space-x-4">
                    <a href="{{  route('books.edit', $book->id) }}" class="text-blue-500">Edit</a>
                    <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure want to delete this book?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500" >Delete</button>
                </div>
            </div>
            @empty
                <h1 class="text-white text-2xl font-bold mb-3">No books yet!</h1>
            @endforelse

        </div>

    </main>
</x-layout>
