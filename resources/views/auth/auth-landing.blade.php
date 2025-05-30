<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to Booklibs</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            background-color: #ffffff;
        }
        .auth-box {
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }
        .auth-box:hover {
            transform: translateY(-5px);
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
                <div class="bg-white p-8 rounded-lg border border-gray-200 auth-box">
                    <h1 class="text-2xl font-semibold text-center text-gray-800 mb-8">Log in to continue</h1>

                    <div class="mb-8 flex justify-center">
                        <div class="w-24 h-24 bg-gray-50 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                    </div>

                    <div class="text-center mb-8">
                        <a href="{{ route('login') }}" class="text-cyan-500 hover:text-cyan-600 font-medium text-lg">
                            Please Login
                        </a>
                    </div>

                    <div class="text-center">
                        <p class="text-gray-600 mb-2">Or create an account if you don't have one yet</p>
                        <a href="{{ route('register') }}" class="text-cyan-500 hover:text-cyan-600 font-medium">
                            Create account
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