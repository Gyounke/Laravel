<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TestimonialController extends Controller
{
    /* ublic function __construct()
    {
        $this->middleware('rolewebmaster')->only("index");
    } */

    public function index()
    {
        $testimonials = Testimonial::all();
        return view("/back/testimonials/all",compact("testimonials"));
    }
    public function show(Testimonial $testimonial)
    {
        return view("/back/testimonials/show",compact("testimonial"));
    }

    public function edit(Testimonial $testimonial)
    {
        $testimonials = Testimonial::all();
        return view("/back/testimonials/edit",compact("testimonial", "testimonials"));
    }

    public function update(Testimonial $testimonial, Request $request)
    {

        $this->authorize('update', $testimonial);

        $testimonial->description = $request->description;
        $testimonial->name = $request->name;
        $testimonial->role = $request->role;
        $testimonial->updated_at = now();
        $testimonial->save();
        return redirect()->route("testimonials.index")->with('message', "Testimonial updated");
    }

    public function destroy(Testimonial $testimonial){

        $this->authorize('delete', $testimonial);

        $testimonial->delete();
        return redirect()->back()->with('message', 'Testimonial destroyed');
    }

    public function create(){
        $testimonial = Testimonial::all();
        return view("back.testimonials.create", compact("testimonial"));
    }

    public function store(Request $request){

        $this->authorize('create', Testimonial::class);

        $testimonial = new Testimonial;
        $validated = $request->validate([
            'description' => 'required',
            'name' => 'required',
            'role' => 'required',
        ]);
        $testimonial->description = $request->description;
        $testimonial->name = $request->name;
        $testimonial->role = $request->role;
        $testimonial->updated_at = now();
        $testimonial->save();
        return redirect()->route("testimonials.index")->with('message', 'Testimonial created');
    }
}
