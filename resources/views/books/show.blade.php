<x-layout :title="$book->title">
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div class="bg-neutral-800/30 p-8 rounded-md  gap-4 mb-4 shadow-lg shadow-black/50">
                <h3 class="text-white text-lg">Description:</h3>
                <h3 class="text-white text-sm">{{ $book->description }}</h3>
                <div class="mt-1">
                    <p class="text-white/60 text-sm">{{ $book->user->name . ' - ' . $book->created_at->format('M d, Y') }}
                    </p>
                </div>

                <div class="mt-4">
                    @if (session('create'))
                        <div>
                            <p
                                class="text-green-500 font-semibold border-2 border-green-600 px-3 py-1 rounded-md bg-green-950">
                                {{ session('create') }}
                            </p>
                        </div>
                    @elseif (session('delete'))
                        <div>
                            <p
                                class="text-red-500 font-semibold border-2 border-red-600 px-3 py-1 rounded-md bg-red-950">
                                {{ session('delete') }}
                            </p>
                        </div>
                    @endif
                </div>

                {{-- add review --}}
                @auth()
                <div class="mt-8 bg-neutral-950/50 p-4 rounded-md shadow-md shadow-black/50">
                    <h3 class="text-white text-lg mb-2">Add a Review</h3>
                    <form action="{{ route('reviews.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="book_id" value="{{ $book->id }}">
                        <label for="content" class="text-white text-sm mb-1 block">Your Review:</label>
                        <input type="text" name="content" id="content"
                            class=" {{ $errors->has('content') ? 'outline-red-600' : 'outline-white/10' }} block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-green-700 sm:text-sm/6">
                        @error('content')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <div class="flex justify-end mt-4">
                            <button type="submit"
                                class="bg-indigo-600 text-white px-3 py-1.5 rounded-md hover:bg-indigo-700 text-sm">Add</button>
                        </div>
                    </form>
                </div>
                @endauth

                {{-- reviews --}}
                @forelse ($book->reviews as $reviews)
                    <div class="mt-8 bg-neutral-950/50 p-4 rounded-md shadow-md shadow-black/50 grid grid-cols-6 gap-4 items-center">
                        <div class="col-span-5">
                            <h3 class="text-white font-simebold text-lg">{{ $reviews->content }}</h3>
                            <p class="text-white/60 text-sm">By: {{ $reviews->user->name }}</p>
                        </div>

                        @auth
                        @if(auth()->user()->role == 'admin')
                        <div class="col-span-1 text-right">
                            <form action="{{ route('reviews.destroy', $reviews->id) }}" method="POST" onsubmit="return confirm('Are you sure want to delete this review?');">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="book_id" value="{{ $book->id }}">
                                <input type="submit" class="text-red-500 hover:text-red-700" value="Delete">
                            </form>
                        </div>
                        @endif
                        @endauth
                    </div>
                @empty
                    <div class="mt-8 bg-neutral-950/50 p-4 rounded-md shadow-md shadow-black/50">
                        <h3 class="text-white">No reviews yet!</h3>
                    </div>
                @endforelse

            </div>
        </div>
    </main>
</x-layout>
