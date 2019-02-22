<?php

namespace helpdesk\Http\Controllers\Admin;

use Illuminate\Http\Request;
use helpdesk\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //Dashdoard
    public function dashboard(){
        return view('admin.dashboard');
    }
}
