<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function goUserDashboard()
    {
        return view('Navigation/EmployeeS/Employee-Dashboard');
    }
    public function goAdminDashboard()
    {
        return view('Navigation/Administration/Admin-Dashboard');
    }

    public function Welcome()
    {
        return view('welcome');
    }



    public function goLeaveForm()
    {
        return view('Navigation/Employees/Leave-Application-Form');
    }


}
