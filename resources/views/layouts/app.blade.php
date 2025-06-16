<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Booklibs Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
    <header class="bg-white shadow p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ route('profile') }}" class="text-xl font-semibold text-gray-800">Booklibs Admin</a>
            <nav>
                <a href="{{ route('profile') }}" class="text-gray-600 hover:text-gray-900 mr-4">Profile</a>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="text-red-600 hover:text-red-800 font-semibold">Logout</button>
                </form>
            </nav>
        </div>
    </header>

    <main class="flex-grow container mx-auto p-6">
        @yield('content')
    </main>

    <footer class="bg-white shadow p-4 text-center text-gray-600">
        &copy; 2025 Booklibs. All rights reserved.
    </footer>
</body>
</html>
