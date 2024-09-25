<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\courses;

class CoursesController extends Controller
{
    public function index()
    {
        $courses = courses::get();
        return view('Courses.case-study', compact('courses'));
    }

    public function create()
    {
        return view('Courses.add-new-courses');
    }
 
    

    public function store(Request $request)
    {
        $request->validate([
            'Name' => 'required',
            'Description' => 'required',
            'C1' => 'required',
            'C2' => 'required',
            'C3' => 'required',
            'C4' => 'required',
            'C5' => 'required',
            'C6' => 'required',
            'image' => 'required|mimes:png|max:2048|dimensions:max_width=770,max_height=450',


        ]);
    
   
        $Name = $request->Name;
        $Description = $request->Description;
        $C1 = $request->C1;
        $C2 = $request->C2;
        $C3 = $request->C3;
        $C4 = $request->C4;
        $C5 = $request->C5;
        $C6 = $request->C6;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
        
            // Resize the image
            $resizedImage = Image::make($file)
                ->resize(770, 450, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
        
                $randomFilename = bin2hex(random_bytes(10)); // Generate a random string of length 20 characters
                $filename = $randomFilename . '.png';
        
            // Save the image to the public directory
            $resizedImage->save(public_path('Image_database/courses_images/' . $filename));
        
            // Now you can store $filename in your database or handle it as needed.
        } else {
            $filename = null; // Set default filename or handle if no file is uploaded
        }

            
    
        $courses = new courses();
        $courses->Name = $Name;
        $courses->Description = $Description;
        $courses->C1 = $C1;
        $courses->C2 = $C2;
        $courses->C3 = $C3;
        $courses->C4 = $C4;
        $courses->C5 = $C5;
        $courses->C6 = $C6;
        $courses->image = $filename;
    
    
        $courses->save();
    
        return redirect()->route('dashboard')->with('success', 'Teacher added successfully.');
    }
    
    

    public function show($id)
    {
        $courses = courses::where('id',$id)->first(); // Fetch a single teacher model
        return view('Courses.case-details', compact('courses'));
    }
    

    public function edit($id)
    {
        $courses = courses::where('id',$id)->first();
            
        
        return view('Courses.edit-courses', compact('courses'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Name' => 'required',
            'Description' => 'required',
            'C1' => 'required',
            'C2' => 'required',
            'C3' => 'required',
            'C4' => 'required',
            'C5' => 'required',
            'C6' => 'required',
            'image' => 'sometimes|mimes:png|max:2048|dimensions:max_width=770,max_height=450',
        ]);
    
        $courses = courses::find($id);
    
        if (!$courses) {
            return redirect()->route('dashboard')->with('error', 'Course not found.');
        }
    
        $Name = $request->input('Name');
        $Description = $request->input('Description');
        $C1 = $request->input('C1');
        $C2 = $request->input('C2');
        $C3 = $request->input('C3');
        $C4 = $request->input('C4');
        $C5 = $request->input('C5');
        $C6 = $request->input('C6');
    
        // Handle file upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
    
            // Resize the image
            $resizedImage = Image::make($file)
                ->resize(770, 450, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
    
            $randomFilename = bin2hex(random_bytes(10)); // Generate a random string of length 20 characters
            $filename = $randomFilename . '.png';
    
            // Save the image to the public directory
            $resizedImage->save(public_path('Image_database/courses_images/' . $filename));
    
            // Delete the old image if it exists
            if ($courses->image && file_exists(public_path('Image_database/courses_images/' . $courses->image))) {
                unlink(public_path('Image_database/courses_images/' . $courses->image));
            }
    
            // Update the course's image filename in the database
            $courses->image = $filename;
        } else {
            // If no new image is uploaded, keep the existing image filename in the database
        }
    
        $courses->Name = $Name;
        $courses->Description = $Description;
        $courses->C1 = $C1;
        $courses->C2 = $C2;
        $courses->C3 = $C3;
        $courses->C4 = $C4;
        $courses->C5 = $C5;
        $courses->C6 = $C6;
    
        $courses->save();
    
        return redirect()->route('dashboard')->with('success', 'Course updated successfully.');
    }
    
    
    

    public function destroy($id)
    {
        $courses = courses::find($id);
    
        if (!$courses) {
            return redirect()->route('dashboard')->with('error', 'Course not found.');
        }
    
        // Delete the course's image if it exists
        if ($courses->image && file_exists(public_path('Image_database/courses_images/' . $courses->image))) {
            unlink(public_path('Image_database/courses_images/' . $courses->image));
        }
    
        // Delete the course from the database
        $courses->delete();
    
        return redirect()->back()->with('success', 'Course deleted successfully.');
    }
    
}
