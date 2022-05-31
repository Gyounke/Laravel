<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CourseController extends Controller
{
    //

    // public function __construct()
    // {
    //     $this->middleware('admin');
    // }
    
    public function index()
    {
        $courses = Course::all();
        return view("/back/courses/all",compact("courses"));
    }

     /**
     * Show the form for creating a new resource.
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $course = Course::all();
        return view("back/courses/create",compact("course"));
    }
    public function read($id)
    {
        $courses = Course::find($id);
        return view("/back/courses/read",compact("courses"));
    }
    public function edit($id)
    {
        $course = Course::find($id);
        return view("/back/courses/edit",compact("course"));
    }
    public function update($id, Request $request)
    {
        $course = Course::find($id);
        $course->subtitle = $request->subtitle;
        $course->title = $request->title;
        /* $destination = "img/" . $course->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $course->image = $request->file("image")->hashName(); */
        $course->button = $request->button;
        $course->updated_at = now();
        $course->save();
        /* $request->file("image")->storePublicly("images", "public"); */
        return redirect()->route("courses.index")->with('message', "Course updated");
    }
}