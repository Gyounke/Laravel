<?php

namespace App\Http\Controllers;

use App\Models\Title;
use Illuminate\Http\Request;

class TitleController extends Controller
{
    //
    public function index()
    {
        $titles = Title::all();
        return view("/back/titles/all",compact("titles"));
    }
    public function create()
    {
        return view("/back/titles/create");
    }
    public function store(Request $request)
    {
        $title = new Title;
        $request->validate([
         'id'=> 'required',
         'name'=> 'required',
        ]); // store_validated_anchor;
        $title->id = $request->id;
        $title->name = $request->name;
        $title->save(); // store_anchor
        return redirect()->route("title.index")->with('message', "Successful storage !");
    }
    public function read($id)
    {
        $title = Title::find($id);
        return view("/back/titles/read",compact("title"));
    }
    public function edit($id)
    {
        $title = Title::find($id);
        return view("/back/titles/edit",compact("title"));
    }
    public function update($id, Request $request)
    {
        $title = Title::find($id);
        $request->validate([
         'id'=> 'required',
         'name'=> 'required',
        ]); // update_validated_anchor;
        $title->id = $request->id;
        $title->name = $request->name;
        $title->save(); // update_anchor
        return redirect()->route("title.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $title = Title::find($id);
        $title->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
