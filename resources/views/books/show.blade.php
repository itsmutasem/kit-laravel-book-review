<x-layout :title=" $book->title ">
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div class="bg-neutral-800/30 p-8 rounded-md  gap-4 mb-4 shadow-lg shadow-black/50">
                <h3 class="text-white text-lg">Description:</h3>
                <h3 class="text-white text-sm">{{ $book->description }}</h3>
                <div class="mt-1">
                    <p class="text-white/60 text-sm">{{ $book->author . ' - ' . $book->created_at->format('M d, Y') }}</p>
                </div>

                {{-- add review --}}
                <div class="mt-8 bg-neutral-950/50 p-4 rounded-md shadow-md shadow-black/50">
                    <h3 class="text-white text-lg mb-2">Add a Review</h3>
                    <form action="" method="">
                        @csrf
                        <label for="content" class="text-white text-sm mb-1 block">Your Review:</label>
                        <input type="text" name="content" id="content" class="w-full p-1.5 rounded-md bg-neutral-800/30 text-white border border-neutral-800 focus:outline-none focus:ring focus:ring-indigo-600">
                        <div class="flex justify-end mt-4">
                        <button type="submit" class="bg-indigo-600 text-white px-3 py-1.5 rounded-md hover:bg-indigo-700 text-sm">Add</button>
                        </div>
                </div>
        </div>
    </main>
</x-layout>