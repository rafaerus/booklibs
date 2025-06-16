<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD - Booklibs</title>
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
                <a href="{{ route('profile') }}" class="text-gray-600 hover:text-gray-900">
                    &larr; Back to Profile
                </a>
            </div>
            <a href="/" class="text-2xl font-semibold text-gray-900">Booklibs</a>
        </nav>

        <div class="flex-1 flex items-center justify-center px-6">
            <div class="w-full max-w-4xl">
                <div class="bg-white p-8 rounded-lg border border-gray-200">
                    <h1 class="text-2xl font-semibold text-center text-gray-800 mb-8">CRUD Management</h1>
                    <p class="text-center text-gray-600 mb-8">Pilih salah satu untuk mengelola data:</p>
                    <div class="flex justify-center gap-8">
                        <a href="{{ route('users.index') }}" class="bg-blue-600 text-white px-6 py-4 rounded-lg hover:bg-blue-700 shadow-md">
                            Manage Users
                        </a>
                        <a href="{{ route('books.index') }}" class="bg-green-600 text-white px-6 py-4 rounded-lg hover:bg-green-700 shadow-md">
                            Manage Books
                        </a>
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
