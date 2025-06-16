@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-semibold mb-6">Add New User</h1>

    <form action="{{ route('users.store') }}" method="POST" class="max-w-lg">
        @csrf

        <div class="mb-4">
            <label for="name" class="block mb-1 font-medium">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" class="w-full border border-gray-300 rounded px-3 py-2" required>
            @error('name')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="email" class="block mb-1 font-medium">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" class="w-full border border-gray-300 rounded px-3 py-2" required>
            @error('email')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="role" class="block mb-1 font-medium">Role</label>
            <select name="role" id="role" class="w-full border border-gray-300 rounded px-3 py-2" required>
                <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>User</option>
                <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
            </select>
            @error('role')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="password" class="block mb-1 font-medium">Password</label>
            <input type="password" name="password" id="password" class="w-full border border-gray-300 rounded px-3 py-2" required>
            @error('password')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password_confirmation" class="block mb-1 font-medium">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="w-full border border-gray-300 rounded px-3 py-2" required>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Create User</button>
    </form>
</div>
@endsection
