<?php

namespace App\Http\Controllers;

use App\Models\Saved_Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SavedBooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'book_id' => 'required|exists:books,id',
        ]);
        $user = Auth::user();
        $saved = Saved_Books::firstOrCreate([
            'user_id' => $user->id,
            'book_id' => $request->book_id,
        ]);
        if ($request->ajax()) {
            return response()->json(['success' => true, 'saved' => $saved]);
        }
        return back()->with('success', 'Book saved!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Saved_Books $saved_Books)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Saved_Books $saved_Books)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Saved_Books $saved_Books)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Saved_Books $saved_Books)
    {
        //
    }
}
