<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeaveController extends Controller
{
    
    public function goAdminLeaveRecord()
        {
            return view('Navigation/Administration/Leave-Application');
        }
    
        
}
