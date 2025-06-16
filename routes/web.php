<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Models\Books;

Route::get('/', function () {
    $books = Books::with('category')->get();
    return view('welcome', compact('books'));
})->name('home');

Route::middleware('guest')->group(function () {
    Route::get('/auth', function () {
        return view('auth.auth-landing');
    })->name('auth.landing');

    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');

    Route::get('/register', function () {
        return view('auth.register');
    })->name('register');

    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    Route::post('/register', [AuthController::class, 'register'])->name('register.post');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/profile/readed', [ProfileController::class, 'readed'])->name('profile.readed');
    Route::get('/profile/saved', [ProfileController::class, 'saved'])->name('profile.saved');
    Route::get('/profile/liked', [ProfileController::class, 'liked'])->name('profile.liked');
    Route::get('/profile/crud', [ProfileController::class, 'crud'])->name('profile.crud');

    Route::resource('users', \App\Http\Controllers\UserController::class)->except(['show']);
    Route::resource('books', \App\Http\Controllers\BooksController::class)->except(['show']);

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('/save-book', [\App\Http\Controllers\SavedBooksController::class, 'store'])->name('save.book');
    Route::post('/like-book', [\App\Http\Controllers\LikedBooksController::class, 'store'])->name('like.book');
    Route::get('/book/{id}', [\App\Http\Controllers\BooksController::class, 'show'])->name('book.detail');
    Route::get('/profile/liked', [\App\Http\Controllers\LikedBooksController::class, 'index'])->name('profile.liked');
});
