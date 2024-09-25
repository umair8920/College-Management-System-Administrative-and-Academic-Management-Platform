<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\teachers;

class TeachersController extends Controller
{
    public function index()
    {
        $teachers = teachers::get();
        return view('Teachers.teachers', compact('teachers'));
    }


    public function create()
    {
        return view('Teachers.add-new-teachers');
    }
 
    

    public function store(Request $request)
    {
        $request->validate([
            'Name' => 'required',
            'Role' => 'required',
            'Description' => 'required',
            'Education' => 'required',
            'Experiences' => 'required',
            'Expertise' => 'required',
            'language' => 'required',
            'position' => 'required',
            'phone' => 'required',
            'mail' => 'required',
            'exp_years' => 'required',
            'image' => 'required|mimes:png|max:2048|dimensions:max_width=270,max_height=300',

        ]);
    
   
        $Name = $request->Name;
        $Role = $request->Role;
        $Description = $request->Description;
        $Education = $request->Education;
        $Experiences = $request->Experiences;
        $Expertise = $request->Expertise;
        $language = $request->language;
        $position = $request->position;
        $phone = $request->phone;
        $mail = $request->mail;
        $exp_years = $request->exp_years;

// Handle file upload
if ($request->hasFile('image')) {
    $file = $request->file('image');

    // Resize the image
    $resizedImage = Image::make($file)
        ->resize(270, 300, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });

    // Generate a unique filename based on teacher's name and current timestamp
    $Name = $request->input('Name');
    $slugifiedName = str_replace(' ', '-', $Name); // Replace spaces with dashes
    $filename = $slugifiedName . '_' . time() . '.png';

    // Save the image to the public directory
    $resizedImage->save(public_path('Image_database/teachers_images/' . $filename));

    // Now you can store $filename in your database or handle it as needed.
} else {
    $filename = null; // Set default filename or handle if no file is uploaded
}

            
    
        $teachers = new teachers();
        $teachers->Name = $Name;
        $teachers->Role = $Role;
        $teachers->Description = $Description;
        $teachers->Education = $Education;
        $teachers->Experiences = $Experiences;
        $teachers->Expertise = $Expertise;
        $teachers->language = $language;
        $teachers->position = $position;
        $teachers->phone = $phone;
        $teachers->mail = $mail;
        $teachers->exp_years = $exp_years;
        $teachers->image = $filename;
    
    
        $teachers->save();
    
        return redirect()->route('dashboard')->with('success', 'Teacher added successfully.');
    }
    
    

    public function show($id)
    {
        $teachers = teachers::where('id',$id)->first(); // Fetch a single teacher model
        return view('Teachers.teachers-details', compact('teachers'));
    }
    

    public function edit($id)
    {
        $teachers = teachers::where('id',$id)->first();
            
        
        return view('Teachers.edit-teachers', compact('teachers'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Name' => 'required',
            'Role' => 'required',
            'Description' => 'required',
            'Education' => 'required',
            'Experiences' => 'required',
            'Expertise' => 'required',
            'language' => 'required',
            'position' => 'required',
            'phone' => 'required',
            'mail' => 'required',
            'exp_years' => 'required',
            'image' => 'sometimes|mimes:png|max:2048|dimensions:max_width=270,max_height=300',
        ]);
    
        $teachers = teachers::find($id);
    
        if (!$teachers) {
            return redirect()->route('dashboard')->with('error', 'Teacher not found.');
        }
    
        $Name = $request->input('Name');
        $Role = $request->input('Role');
        $Description = $request->input('Description');
        $Education = $request->input('Education');
        $Experiences = $request->input('Experiences');
        $Expertise = $request->input('Expertise');
        $language = $request->input('language');
        $position = $request->input('position');
        $phone = $request->input('phone');
        $mail = $request->input('mail');
        $exp_years = $request->input('exp_years');
    
        // Handle file upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
    
            // Resize and encode the image
            $resizedImage = Image::make($file)
                ->resize(270, 300, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
    
            // Generate a unique filename based on teacher's name and current timestamp
            $slugifiedName = str_replace(' ', '-', $Name); // Replace spaces with dashes
            $filename = $slugifiedName . '_' . time() . '.png';
    
            // Save the image to the public directory
            $resizedImage->save(public_path('Image_database/teachers_images/' . $filename));
    
            // Delete the old image if it exists
            if ($teachers->image && file_exists(public_path('Image_database/teachers_images/' . $teachers->image))) {
                unlink(public_path('Image_database/teachers_images/' . $teachers->image));
            }
    
            // Update the teacher's image filename in the database
            $teachers->image = $filename;
        }
    
        $teachers->Name = $Name;
        $teachers->Role = $Role;
        $teachers->Description = $Description;
        $teachers->Education = $Education;
        $teachers->Experiences = $Experiences;
        $teachers->Expertise = $Expertise;
        $teachers->language = $language;
        $teachers->position = $position;
        $teachers->phone = $phone;
        $teachers->mail = $mail;
        $teachers->exp_years = $exp_years;
    
        $teachers->save();
    
        return redirect()->route('dashboard')->with('success', 'Teacher updated successfully.');
    }
    
    
    

    public function destroy($id)
    {
        $teachers = teachers::find($id);
    
        if (!$teachers) {
            return redirect()->route('dashboard')->with('error', 'Teacher not found.');
        }
    
        // Delete the teacher's image if it exists
        if ($teachers->image && file_exists(public_path('Image_database/teachers_images/' . $teachers->image))) {
            unlink(public_path('Image_database/teachers_images/' . $teachers->image));
        }
    
        // Delete the teacher from the database
        $teachers->delete();
    
        return redirect()->back()->with('success', 'Teacher deleted successfully.');
    }
    
}
