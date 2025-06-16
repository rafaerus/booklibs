<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Read_history;
use Illuminate\Support\Facades\Auth;
use App\Models\Books;
use App\Models\Saved_Books;
use Illuminate\Support\Carbon;

class ProfileController extends Controller
{
    public function __construct()
    {
        // Hapus middleware dari constructor
    }

    public function index()
    {
        return view('profile.index');
    }

    public function readed()
    {
        $user = Auth::user();
        $readedBooks = Read_history::with('book.category')
            ->where('user_id', $user->id)
            ->orderByDesc('last_read')
            ->get();
        return view('profile.readed', compact('readedBooks'));
    }

    public function saved()
    {
        $user = Auth::user();
        // Log all saved books as read
        $savedBooks = Saved_Books::with('book.category')
            ->where('user_id', $user->id)
            ->orderByDesc('created_at')
            ->get();
        foreach ($savedBooks as $saved) {
            Read_history::updateOrCreate(
                [
                    'user_id' => $user->id,
                    'book_id' => $saved->book_id,
                ],
                [
                    'last_read' => Carbon::now(),
                ]
            );
        }
        return view('profile.saved', compact('savedBooks'));
    }

    public function liked()
    {
        return view('profile.liked');
    }

    public function crud()
    {
        return view('profile.crud');
    }
}
