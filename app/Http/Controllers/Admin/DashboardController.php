<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attention;
use App\Models\Member;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $attentions = Attention::all();
        $members = Member::all();
        return view('admin.dashboard', compact('attentions', 'members'));
    }
}
