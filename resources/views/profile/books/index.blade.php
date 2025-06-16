@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-semibold mb-6">Manage Books</h1>

    <a href="{{ route('books.create') }}" class="mb-4 inline-block bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Add New Book</a>

    @if(session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    <table class="min-w-full bg-white border border-gray-200 rounded">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">Title</th>
                <th class="py-2 px-4 border-b">Author</th>
                <th class="py-2 px-4 border-b">ISBN</th>
                <th class="py-2 px-4 border-b">Published At</th>
                <th class="py-2 px-4 border-b">Category</th>
                <th class="py-2 px-4 border-b">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <td class="py-2 px-4 border-b">{{ $book->title }}</td>
                <td class="py-2 px-4 border-b">{{ $book->author }}</td>
                <td class="py-2 px-4 border-b">{{ $book->isbn }}</td>
                <td class="py-2 px-4 border-b">{{ $book->published_at }}</td>
                <td class="py-2 px-4 border-b">{{ $book->category->name ?? 'N/A' }}</td>
                <td class="py-2 px-4 border-b">
                    <a href="{{ route('books.edit', $book) }}" class="text-green-600 hover:underline mr-2">Edit</a>
                    <form action="{{ route('books.destroy', $book) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this book?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
