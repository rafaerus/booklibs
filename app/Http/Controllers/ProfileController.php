<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('profile.readed');
    }

    public function saved()
    {
        return view('profile.saved');
    }

    public function liked()
    {
        return view('profile.liked');
    }
}
