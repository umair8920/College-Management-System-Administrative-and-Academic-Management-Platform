<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teachers;
use App\Models\courses;

class DashboardController extends Controller
{
    //

    public function index()
    {
        $teachers = teachers::all();
        $courses = courses::all();
        return view('dashboard', compact('teachers', 'courses'));
    }

    public function static_navigation()
    {
        return view('layouts.layout-static');
    }

    public function light_sidenav()
    {
        return view('layouts.layout-sidenav-light');
    }
}
