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

        <div class="flex-1 flex items-start justify-center px-6 py-12">
            <div class="w-full max-w-2xl">
                <div class="bg-white p-8 rounded-lg border border-gray-200">
                    <div class="flex items-center gap-6 mb-8">
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

                    <div class="space-y-6">
                        <div>
                            <h2 class="text-lg font-medium text-gray-900 mb-2">Account Information</h2>
                            <div class="bg-gray-50 rounded-lg p-4 space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-500">Email</label>
                                    <p class="mt-1 text-gray-900">{{ Auth::user()->email }}</p>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-500">Account Status</label>
                                    <p class="mt-1 text-gray-900">Active</p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h2 class="text-lg font-medium text-gray-900 mb-2">Reading Statistics</h2>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div class="bg-gray-50 rounded-lg p-4">
                                    <p class="text-sm font-medium text-gray-500">Books Read</p>
                                    <p class="mt-1 text-2xl font-semibold text-gray-900">0</p>
                                </div>
                                <div class="bg-gray-50 rounded-lg p-4">
                                    <p class="text-sm font-medium text-gray-500">Currently Reading</p>
                                    <p class="mt-1 text-2xl font-semibold text-gray-900">0</p>
                                </div>
                                <div class="bg-gray-50 rounded-lg p-4">
                                    <p class="text-sm font-medium text-gray-500">Want to Read</p>
                                    <p class="mt-1 text-2xl font-semibold text-gray-900">0</p>
                                </div>
                            </div>
                        </div>

                        <div class="pt-4 flex justify-between items-center">
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

        <footer class="py-6 px-6 border-t">
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