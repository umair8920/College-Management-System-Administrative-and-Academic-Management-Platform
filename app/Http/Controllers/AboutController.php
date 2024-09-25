<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teachers;

class AboutController extends Controller
{
    //

    public function index()
    {
        $teachers = teachers::get();
        return view('About.about-us', compact('teachers'));

    }

}
