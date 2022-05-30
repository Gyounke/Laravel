<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TestimonialController extends Controller
{
    //

    // public function __construct()
    // {
    //     $this->middleware('admin');
    // }
    
    public function index()
    {
        $testimonials = Testimonial::all();
        return view("/back/testimonials/all",compact("testimonials"));
    }
    public function read($id)
    {
        $testimonials = Testimonial::find($id);
        return view("/back/testimonials/read",compact("testimonials"));
    }
    public function edit($id)
    {
        $testimonial = Testimonial::find($id);
        return view("/back/testimonials/edit",compact("testimonial"));
    }
    public function update($id, Request $request)
    {
        $testimonial = Testimonial::find($id);
        $testimonial->subtitle = $request->subtitle;
        $testimonial->title = $request->title;
        /* $destination = "img/" . $testimonial->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $testimonial->image = $request->file("image")->hashName(); */
        $testimonial->button = $request->button;
        $testimonial->updated_at = now();
        $testimonial->save();
        /* $request->file("image")->storePublicly("images", "public"); */
        return redirect()->route("testimonials.index")->with('message', "Testimonial updated");
    }
}