<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teachers;

class ServicesController extends Controller
{
    //

    public function index()
    {
        $teachers = teachers::get();
        return view('Services.services', compact('teachers'));

    }
}
