<?php

namespace App\Http\Controllers\FrontendControllers;

use App\Http\Controllers\Controller;
use App\Models\courses;
use App\Models\teachers;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    //

    public function index()
    {


        $teachers = teachers::get();
        $courses = courses::get();

            return view('Home', compact('teachers', 'courses'));
        

    }
}
