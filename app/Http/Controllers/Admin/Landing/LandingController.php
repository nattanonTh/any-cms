<?php

namespace App\Http\Controllers\Admin\Landing;

use App\Http\Controllers\Controller;

class LandingController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
}
