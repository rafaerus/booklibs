@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-semibold mb-6">Add New Book</h1>

    <form action="{{ route('books.store') }}" method="POST" class="max-w-lg">
        @csrf

        <div class="mb-4">
            <label for="title" class="block mb-1 font-medium">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" class="w-full border border-gray-300 rounded px-3 py-2" required>
            @error('title')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="author" class="block mb-1 font-medium">Author</label>
            <input type="text" name="author" id="author" value="{{ old('author') }}" class="w-full border border-gray-300 rounded px-3 py-2" required>
            @error('author')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="isbn" class="block mb-1 font-medium">ISBN</label>
            <input type="text" name="isbn" id="isbn" value="{{ old('isbn') }}" class="w-full border border-gray-300 rounded px-3 py-2" required>
            @error('isbn')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="published_at" class="block mb-1 font-medium">Published At</label>
            <input type="date" name="published_at" id="published_at" value="{{ old('published_at') }}" class="w-full border border-gray-300 rounded px-3 py-2" required>
            @error('published_at')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="category_id" class="block mb-1 font-medium">Category</label>
            <select name="category_id" id="category_id" class="w-full border border-gray-300 rounded px-3 py-2" required>
                <option value="">Select Category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="description" class="block mb-1 font-medium">Description</label>
            <textarea name="description" id="description" rows="4" class="w-full border border-gray-300 rounded px-3 py-2">{{ old('description') }}</textarea>
            @error('description')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Create Book</button>
    </form>
</div>
@endsection
