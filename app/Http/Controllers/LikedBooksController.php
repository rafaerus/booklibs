<?php

namespace App\Http\Controllers;

use App\Models\Liked_Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikedBooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $likedBooks = Liked_Books::with('book.category')
            ->where('user_id', $user->id)
            ->orderByDesc('created_at')
            ->get();
        return view('profile.liked', compact('likedBooks'));
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
        $liked = Liked_Books::firstOrCreate([
            'user_id' => $user->id,
            'book_id' => $request->book_id,
        ]);
        if ($request->ajax()) {
            return response()->json(['success' => true, 'liked' => $liked]);
        }
        return back()->with('success', 'Book liked!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Liked_Books $liked_Books)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Liked_Books $liked_Books)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Liked_Books $liked_Books)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Liked_Books $liked_Books)
    {
        //
    }
}
