<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Read_history;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = \App\Models\Books::with('category')->get();
        return view('profile.books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = \App\Models\Category::all();
        return view('profile.books.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'author' => ['required', 'string', 'max:255'],
            'isbn' => ['required', 'string', 'max:255'],
            'published_at' => ['required', 'date'],
            'category_id' => ['required', 'exists:categories,id'],
            'description' => ['nullable', 'string'],
        ]);

        \App\Models\Books::create($validated);

        return redirect()->route('books.index')->with('success', 'Book created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $book = \App\Models\Books::with('category')->findOrFail($id);
        // Log to read_histories if user is logged in
        if (Auth::check()) {
            Read_history::updateOrCreate(
                [
                    'user_id' => Auth::id(),
                    'book_id' => $book->id,
                ],
                [
                    'last_read' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]
            );
        }
        return view('book.detail', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Books $book)
    {
        $categories = \App\Models\Category::all();
        return view('profile.books.edit', compact('book', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Books $book)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'author' => ['required', 'string', 'max:255'],
            'isbn' => ['required', 'string', 'max:255'],
            'published_at' => ['required', 'date'],
            'category_id' => ['required', 'exists:categories,id'],
            'description' => ['nullable', 'string'],
        ]);

        $book->update($validated);

        return redirect()->route('books.index')->with('success', 'Book updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Books $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Book deleted successfully.');
    }
}
