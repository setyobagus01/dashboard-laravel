<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;

class CourseController extends Controller
{
    public $course;
    public function index()
    {
        return view('courses.course',[
            'course' =>
                $this->course ?? false
        ],
    );
    }

    public function show($id) {

        $this->course = Course::find($id);
        return view('courses.course',[
            'course' => $this->course 
        ]);
    }

   
}
