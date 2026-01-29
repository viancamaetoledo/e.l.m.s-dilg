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

    public function goCTOForm()
    {
        return view('Navigation/Employees/CTO-Application');
    }

    public function goEmployeeInfoCredit()
    {
        return view('Navigation/Administration/Employee-Info-Credit');
    }

    public function goAdminLeaveRecord()
    {
        return view('Navigation/Administration/Admin-Leave-Application');
    }
    public function goAdminCTORecord()
    {
        return view('Navigation/Administration/Admin-CTO-Application');
    }
    public function goAdminReports()
    {
        return view('Navigation/Administration/Admin-Reports');
    }
    public function goAdminSettings()
    {
        return view('Navigation/Administration/Admin-Settings');

    }

}
