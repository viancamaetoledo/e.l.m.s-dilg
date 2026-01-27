<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function goUserDashboard()
    {
        return view('user-dashboard');
    }

    public function Welcome()
    {
        return view('welcome');
    }
}
