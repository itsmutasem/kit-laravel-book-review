<x-layout :title="'My Reviews'">
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            @forelse($reviews as $review)
                <div class="bg-neutral-800/30 p-8 rounded-md grid grid-cols-6 gap-4 mb-4 shadow-lg shadow-black/50">
                    <div class="col-start-1 col-end-3">
                        <h1 class="text-white text-2xl font-bold mb-3">{{ $review->content }}</h1>
                        <a href="{{ route('books.show', $review->book->id) }}" class="text-white/50 text-sm">{{ $review->book->title }}</a>
                    </div>
                </div>
            @empty
                <h1 class="text-white text-2xl font-bold mb-3">No reviews yet!</h1>
            @endforelse
            <div class="mt-4">
                {{ $reviews->links() }}
            </div>
        </div>


    </main>
</x-layout>
