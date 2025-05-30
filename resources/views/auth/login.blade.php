<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Booklibs</title>
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

        <div class="flex-1 flex items-center justify-center px-6">
            <div class="w-full max-w-md">
                <div class="bg-white p-8 rounded-lg border border-gray-200">
                    <h1 class="text-2xl font-semibold text-center text-gray-800 mb-8">Welcome to Booklibs</h1>

                    @if (session('success'))
                        <div class="mb-4 p-4 bg-green-50 border border-green-200 text-green-600 rounded-lg">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('login.post') }}" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            <input type="email" 
                                   name="email"
                                   placeholder="melissa@mayer.com"
                                   class="w-full px-4 py-3 rounded-lg bg-gray-50 border-gray-200 focus:border-cyan-500 focus:ring-cyan-500" 
                                   required>
                        </div>

                        <div>
                            <input type="password" 
                                   name="password"
                                   placeholder="********"
                                   class="w-full px-4 py-3 rounded-lg bg-gray-50 border-gray-200 focus:border-cyan-500 focus:ring-cyan-500" 
                                   required>
                        </div>

                        <button type="submit" 
                                class="w-full bg-gray-700 text-white py-3 px-4 rounded-lg hover:bg-gray-800 transition-colors">
                            Login
                        </button>
                    </form>

                    <div class="mt-8 text-center">
                        <p class="text-gray-600 mb-2">Don't have an account yet?</p>
                        <a href="{{ route('register') }}" class="text-cyan-500 hover:text-cyan-600 font-medium">
                            SIGN IN
                        </a>
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