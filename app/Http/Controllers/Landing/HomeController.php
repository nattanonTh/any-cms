<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('landing.home');
    }

    public function promotion()
    {
        return view('landing.promotion');
    }

    public function blog()
    {
        return view('landing.blog');
    }

    public function gallery()
    {
        return view('landing.gallery');
    }
}
