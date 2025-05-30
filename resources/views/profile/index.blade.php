<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile - Booklibs</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            background-color: #ffffff;
        }
    </style>
</head>
<body class="antialiased">
    <div class="min-h-screen flex flex-col">
        <nav class="w-full px-6 py-4 flex justify-between items-center border-b">
            <div class="flex items-center gap-4">
                <a href="/" class="text-gray-600 hover:text-gray-900">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                </a>
                <span class="text-xl text-gray-700">Back</span>
            </div>
            <a href="/" class="text-2xl font-semibold text-gray-900">Booklibs</a>
        </nav>

        <div class="flex-1 flex flex-col items-center px-6 py-8">
            <div class="w-full max-w-6xl">
                <!-- Profile Header -->
                <div class="bg-white p-8 rounded-lg border border-gray-200 mb-8">
                    <div class="flex items-center gap-6">
                        <div class="w-24 h-24 bg-gray-50 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <div>
                            <h1 class="text-2xl font-semibold text-gray-900">{{ Auth::user()->name }}</h1>
                            <p class="text-gray-500">Member since {{ Auth::user()->created_at->format('F Y') }}</p>
                        </div>
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <a href="{{ route('profile.readed') }}" class="bg-white p-6 rounded-lg border border-gray-200 hover:border-cyan-500 transition-colors group">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-lg font-medium text-gray-900 group-hover:text-cyan-500">Books Read</h3>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400 group-hover:text-cyan-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <p class="text-sm text-gray-500">View all the books you've finished reading</p>
                    </a>

                    <a href="{{ route('profile.saved') }}" class="bg-white p-6 rounded-lg border border-gray-200 hover:border-cyan-500 transition-colors group">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-lg font-medium text-gray-900 group-hover:text-cyan-500">Saved Books</h3>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400 group-hover:text-cyan-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                            </svg>
                        </div>
                        <p class="text-sm text-gray-500">Access your saved books for later</p>
                    </a>

                    <a href="{{ route('profile.liked') }}" class="bg-white p-6 rounded-lg border border-gray-200 hover:border-cyan-500 transition-colors group">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-lg font-medium text-gray-900 group-hover:text-cyan-500">Liked Books</h3>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400 group-hover:text-cyan-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </div>
                        <p class="text-sm text-gray-500">Browse through your favorite books</p>
                    </a>
                </div>

                <!-- Account Actions -->
                <div class="bg-white p-6 rounded-lg border border-gray-200">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-1">Account Settings</h3>
                            <p class="text-sm text-gray-500">{{ Auth::user()->email }}</p>
                        </div>
                        <div class="flex items-center gap-4">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="text-red-600 hover:text-red-700 font-medium">
                                    Sign Out
                                </button>
                            </form>
                            <a href="#" class="text-cyan-500 hover:text-cyan-600 font-medium">
                                Edit Profile
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="py-6 px-6 border-t mt-8">
            <div class="max-w-7xl mx-auto flex justify-between items-center">
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <span class="text-gray-600">BookLibs@gmail.com</span>
                </div>
                <p class="text-gray-600">© 2025 Booklibs. All Rights Reserved.</p>
            </div>
        </footer>
    </div>
</body>
</html> 