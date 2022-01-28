<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        return view('courses.course');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'totallesson' => 'required',
            'currentlesson' => 'required',
            'image.*' => 'mimes:doc,pdf,docx,zip,jpeg,png,jpg,gif,svg',
        ]);


        // Save the file locally in the storage/public/ folder under a new folder named /product
        if ($request->hasFile('img_url')) {
            $request->img_url->store('public/images');
            $file = $request->file('img_url');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path() . '/images';
            $file->move($destinationPath, $fileName);

            $course = new Course([
                'title' => $request->title,
                'img_url' => $fileName,
                'category' => $request->category,
                'totallesson' => $request->totallesson,
                'currentlesson' => $request->currentlesson,
                'imagename' => $request->img_url->getClientOriginalName()
            ]);
            $course->save();
            
        }

            

        return redirect()->route('courses');
    }
}
