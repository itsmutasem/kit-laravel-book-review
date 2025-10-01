<x-layout :title="'Create an Book'">
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div class="bg-neutral-800/30 p-8 rounded-md shadow-lg shadow-black/50">
                <form method="POST" action="{{ route('books.store') }}">
                    @csrf
                    <div class="space-y-12">
                        <div class="border-b border-white/10 pb-12">
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-3">
                                    <label for="title" class="block text-sm/6 font-medium text-white">Title</label>
                                    <div class="mt-2">
                                        <input id="title" type="text" name="title" value="{{ old('title') }}" class=" {{ $errors->has('title') ? 'outline-red-600' : 'outline-white/10' }} block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-green-700 sm:text-sm/6" />
                                    </div>
                                    @error('title')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="author" class="block text-sm/6 font-medium text-white">Author</label>
                                    <div class="mt-2">
                                        <input id="author" type="text" name="author" value="{{ old('author') }}" class=" {{ $errors->has('author') ? 'outline-red-600' : 'outline-white/10' }} block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-green-700 sm:text-sm/6" />
                                    </div>
                                    @error('author')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="col-span-full">
                                    <label for="description" class="block text-sm/6 font-medium text-white">Description</label>
                                    <div class="mt-2">
                                        <textarea id="description"  name="description" rows="3" class=" {{ $errors->has('description') ? 'outline-red-600' : 'outline-white/10' }} block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-green-700 sm:text-sm/6">{{ old('description') }}</textarea>
                                    </div>
                                    @error('description')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                    <p class="mt-3 text-sm/6 text-gray-400">Write a few sentences about the book.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <a href="{{ route('books.index') }}" type="button" class="text-sm/6 font-semibold text-white hover:text-white/60">Cancel</a>
                        <button type="submit" class="rounded-md bg-green-700 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-700 hover:bg-green-500">Save</button>
                    </div>
                </form>

            </div>
        </div>
    </main>
</x-layout>
