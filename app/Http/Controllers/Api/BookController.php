<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Books;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        try {
            $books = Books::with('category')->get();

            return response()->json([
                'status' => 'success',
                'data' => $books
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch books',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
