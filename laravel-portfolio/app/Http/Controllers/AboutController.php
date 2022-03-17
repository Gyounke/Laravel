<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    function index() {
        $about = About::all();
        return view('tables.abouttable', compact('about'));
    }

    public function edit($id){
        $about = About::find($id);
        return view('edit.factedit', compact('fact'));
    }

    public function update($id, Request $request) {
        $about = About::find($id);
        $about->categories = $request->categories;
        $about->value = $request->value;
        $about->updated_at = now();
        $about->save();
        return redirect()->route("abouts.index");
    }

}