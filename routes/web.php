<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

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
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
