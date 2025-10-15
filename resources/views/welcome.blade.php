<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <style>
        body {
            /*background-color: #03001c;*/
            /*background-image: radial-gradient(at 7% 43%, #03001c 0%, transparent 60%), radial-gradient(at 83% 89%, #301e67 0%, transparent 50%), radial-gradient(at 10% 24%, #5b8fb9 0%, transparent 40%), radial-gradient(at 47% 8%, #b6eada 0%, transparent 30%);*/
            background-color: #000000;
            background-image: radial-gradient(at 29% 12%, #000000 0%, transparent 60%), radial-gradient(at 58% 18%, #373737 0%, transparent 50%), radial-gradient(at 31% 39%, #949494 0%, transparent 40%), radial-gradient(at 66% 98%, #2c2c2c 0%, transparent 30%);
        }
    </style>
</head>
<body class="min-h-screen">
{{-- The container --}}
<div class="relative z-10 text-center flex items-center justify-center min-h-screen">
{{--    Alpine JS --}}
    <div x-data="{ show: false }" x-init="setTimeout(() => show = true, 300)">
{{--        Book review label --}}
        <div class="inline-flex items-center mb-2"
             x-cloak
             x-show="show"
             x-transition:enter="transition ease-out duration-1000"
             x-transition:enter-start="opacity-0 scale-90"
             x-transition:enter-end="opacity-100 scale-100">
            <h4 class="text-sm text-white/50 rounded-full bg-white/10 px-3 py-1 w-fit">Book Review</h4>
        </div>

        <div x-cloak
             x-show="show"
             x-transition:enter="transition ease-out duration-1000"
             x-transition:enter-start="opacity-0 scale-90"
             x-transition:enter-end="opacity-100 scale-100">
            <div class="text-8xl font-bold mb-6 tracking-tight font-serif italic">
                <h1 class="text-white">Pick a Book</h1>
                <h1 class="text-white/50">and Review it</h1>
            </div>
        </div>

        <div x-cloak
             x-show="show"
             x-transition:enter="transition ease-out duration-1000"
             x-transition:enter-start="opacity-0 scale-90"
             x-transition:enter-end="opacity-100 scale-100">
            <p class="text-gray-500 mb-6">Discover, review, and share your favorite books effortlessly.</p>
        </div>

        <div x-cloak
             x-show="show"
             x-transition:enter="transition ease-out duration-1000"
             x-transition:enter-start="opacity-0 scale-90"
             x-transition:enter-end="opacity-100 scale-100">
            <a href="{{ route('login') }}" class="text-white bg-white/10 px-4 py-2 rounded-lg hover:bg-white/20">Login</a>
            <a href="{{ route('books.index') }}" class="text-white bg-gradient-to-r from-rose-900/70 to-violet-900/70 px-4 py-2 rounded-lg hover:from-rose-700 hover:to-violet-700">Explore Books →</a>
        </div>
    </div>
</div>
</body>
</html>
