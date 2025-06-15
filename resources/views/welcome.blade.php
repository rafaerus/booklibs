<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Booklibs - Your Digital Library</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <script src="https://unpkg.com/@heroicons/react@2.0.18/24/outline/esm/index.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Figtree', sans-serif;
            background-color: #ffffff;
        }

        .search-input {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%23666666'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z'%3E%3C/path%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: 0.75rem center;
            background-size: 1.25rem;
            padding-left: 2.5rem;
        }
    </style>
</head>

<body class="antialiased">
    <div class="min-h-screen">
        <nav class="bg-white border-b border-gray-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex items-center">
                        <a href="/" class="text-2xl font-semibold text-gray-900">
                            Booklibs
                        </a>
                    </div>
                    <div class="flex items-center space-x-8">
                        <a href="#" class="nav-link text-gray-600">Home</a>
                        <a href="#" class="nav-link text-gray-600">Explore</a>
                        <div class="relative">
                            <input type="text"
                                placeholder="Book name or writer name"
                                class="search-input w-64 h-10 pl-10 pr-4 rounded-lg bg-gray-50 border-none focus:ring-0">
                        </div>
                        @auth
                        <a href="{{ route('profile') }}" class="text-gray-600 hover:text-gray-900">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </a>
                        @else
                        <a href="{{ route('auth.landing') }}" class="text-gray-600 hover:text-gray-900">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </a>
                        @endauth
                        <button class="text-gray-600 hover:text-gray-900">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </nav>

        <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="mb-16">
                <div class="relative w-full max-w-xl mx-auto">
                    <input type="text"
                        placeholder="Book name or writer name"
                        class="search-input w-full h-12 pl-10 pr-4 rounded-lg bg-gray-50 border-none focus:ring-0">
                </div>
            </div>

            <div class="mb-12">
                <h2 class="text-xl font-semibold text-gray-900 mb-6">Available Books</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    @forelse($books as $book)
                    <a href="{{ route('book.detail', $book->id) }}" class="book-card group">
                        <div class="aspect-[3/4] overflow-hidden rounded-lg bg-gray-100">
                            <img src="{{ $book->cover_image ?? 'https://images.unsplash.com/photo-1544947950-fa07a98d237f?q=80&w=687&auto=format&fit=crop' }}"
                                alt="{{ $book->title }}"
                                class="book-cover w-full h-full object-cover">
                        </div>
                        <div class="mt-3">
                            <h3 class="text-sm font-medium text-gray-900">{{ $book->title }}</h3>
                            <p class="text-sm text-gray-500">{{ $book->category->name ?? '-' }}</p>
                        </div>
                    </a>
                    @empty
                    <div class="col-span-full text-center text-gray-500 py-10">
                        No books available.
                    </div>
                    @endforelse
                </div>
            </div>

            <div>
                <h2 class="text-xl font-semibold text-gray-900 mb-6">Most Viewed</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <a href="#" class="book-card group">
                        <div class="aspect-[3/4] overflow-hidden rounded-lg bg-gray-100">
                            <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?q=80&w=1374&auto=format&fit=crop"
                                alt="Seeking Revival in Everyday"
                                class="book-cover w-full h-full object-cover">
                        </div>
                        <div class="mt-3">
                            <h3 class="text-sm font-medium text-gray-900">Seeking Revival in Everyday</h3>
                            <p class="text-sm text-gray-500">Psychology</p>
                        </div>
                    </a>

                    <a href="#" class="book-card group">
                        <div class="aspect-[3/4] overflow-hidden rounded-lg bg-gray-100">
                            <img src="https://images.unsplash.com/photo-1476275466078-4007374efbbe?q=80&w=1529&auto=format&fit=crop"
                                alt="Psalms, Meaning of Life"
                                class="book-cover w-full h-full object-cover">
                        </div>
                        <div class="mt-3">
                            <h3 class="text-sm font-medium text-gray-900">Psalms, Meaning of Life</h3>
                            <p class="text-sm text-gray-500">Non-fiction</p>
                        </div>
                    </a>

                    <a href="#" class="book-card group">
                        <div class="aspect-[3/4] overflow-hidden rounded-lg bg-gray-100">
                            <img src="https://images.unsplash.com/photo-1495640388908-05fa85288e61?q=80&w=687&auto=format&fit=crop"
                                alt="Story of John"
                                class="book-cover w-full h-full object-cover">
                        </div>
                        <div class="mt-3">
                            <h3 class="text-sm font-medium text-gray-900">Story of John</h3>
                            <p class="text-sm text-gray-500">Magazine</p>
                        </div>
                    </a>

                    <a href="#" class="book-card group">
                        <div class="aspect-[3/4] overflow-hidden rounded-lg bg-gray-100">
                            <img src="https://images.unsplash.com/photo-1543002588-bfa74002ed7e?q=80&w=687&auto=format&fit=crop"
                                alt="Company of One"
                                class="book-cover w-full h-full object-cover">
                        </div>
                        <div class="mt-3">
                            <h3 class="text-sm font-medium text-gray-900">Company of One</h3>
                            <p class="text-sm text-gray-500">Business</p>
                        </div>
                    </a>
                </div>
            </div>
        </main>
    </div>
</body>

</html>