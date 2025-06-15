<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $book->title }} - Book Detail</title>
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            background: #f5f5f5;
        }
    </style>
</head>

<body class="antialiased">
    <div class="min-h-screen flex flex-col">
        <nav class="w-full px-6 py-4 flex justify-between items-center border-b bg-white">
            <div class="flex items-center gap-4">
                <a href="/" class="text-gray-600 hover:text-gray-900 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    <span class="ml-2">Back</span>
                </a>
            </div>
            <span class="text-2xl font-semibold text-gray-900">Booklibs</span>
        </nav>
        <main class="flex-1 flex flex-col items-center px-6 py-12">
            <div class="w-full max-w-5xl grid grid-cols-1 md:grid-cols-2 gap-12 bg-white rounded-lg shadow p-8">
                <div class="flex justify-center items-start">
                    <img src="{{ $book->cover_image ?? 'https://images.unsplash.com/photo-1544947950-fa07a98d237f' }}" alt="{{ $book->title }}" class="rounded-lg shadow-lg w-80 h-[28rem] object-cover bg-gray-100">
                </div>
                <div>
                    <span class="inline-block mb-2 px-3 py-1 bg-gray-100 text-gray-600 rounded-full text-xs font-semibold">{{ $book->category->name ?? '-' }}</span>
                    <h1 class="text-2xl font-bold text-gray-900 mb-1">{{ $book->title }}</h1>
                    <p class="text-gray-700 mb-4">by {{ $book->author }}</p>
                    <p class="text-gray-600 mb-6">{{ $book->description }}</p>
                    <div class="flex gap-4">
                        <form method="POST" action="{{ route('save.book') }}">
                            @csrf
                            <input type="hidden" name="book_id" value="{{ $book->id }}">
                            <button type="submit" class="px-8 py-2 bg-gray-700 text-white font-semibold rounded hover:bg-gray-800 flex items-center gap-2">
                                Save
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </button>
                        </form>
                        <form method="POST" action="{{ route('like.book') }}">
                            @csrf
                            <input type="hidden" name="book_id" value="{{ $book->id }}">
                            <button type="submit" class="px-8 py-2 bg-pink-600 text-white font-semibold rounded hover:bg-pink-700 flex items-center gap-2">
                                Liked
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 010 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.414l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <footer class="py-6 px-6 border-t mt-8 bg-white">
            <div class="max-w-7xl mx-auto flex justify-between items-center">
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <span class="text-gray-600">Book.Libs@gmail.com</span>
                </div>
                <p class="text-gray-600">© 2025 Booklibs. All Rights Reserved.</p>
            </div>
        </footer>
    </div>
</body>

</html>