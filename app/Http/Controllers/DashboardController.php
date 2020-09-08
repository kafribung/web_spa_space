<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke(Request $request)
    {
        $blog   = Blog::count();
        $admin  = User::count();
        return view('dashboard.dashboard', compact('blog', 'admin'));
    }
}
