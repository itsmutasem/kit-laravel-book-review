<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>
<body class="h-full bg-zinc-950">
<div class="min-h-full">
    <nav class="bg-zinc-950 mt-1">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 border border-white/10 rounded-full">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="shrink-0">
                        <h1 class="text-white font-medium px-3 py-2 bg-blue-950/60 rounded-full "> 🕮 Book Review</h1>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <!-- Current: "bg-gray-950/50 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
                            <x-nav-link href="{{ route('books.index') }}" :active="request()->routeIs('books.index')">Books</x-nav-link>
                            <x-nav-link href="{{ route('reviews.index') }}" :active="request()->routeIs('reviews.index')">My Reviews</x-nav-link>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">
                        @if(auth()->user())
                            <div>
                            <p class="text-white mr-4">{{ auth()->user()->name }}</p>
                            </div>
                            <a href="" class="text-white bg-red-950/60 rounded-md px-3 py-2 text-sm font-medium hover:bg-red-900">Logout</a>
                        @else
                        <a href="" class="text-white bg-blue-950/60 rounded-md px-3 py-2 text-sm font-medium hover:bg-blue-900">Login</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <header class="relative bg-zinc-950 after:pointer-events-none after:absolute after:inset-x-0 after:inset-y-0">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-white">{{ $title }}</h1>
        </div>
    </header>

    {{ $slot }}

</div>

</body>
</html>
