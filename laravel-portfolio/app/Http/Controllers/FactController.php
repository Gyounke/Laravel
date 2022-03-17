<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use Illuminate\Http\Request;

class FactController extends Controller
{
    function index() {
        $fact = Fact::all();
        return view('tables.facttable', compact('fact'));
    }

    public function destroy($id){
        $fact = Fact::find($id);
        $fact->delete();
        return redirect()->back();
    }

    public function edit($id){
        $fact = Fact::find($id);
        return view('edit.factedit', compact('fact'));
    }

    public function update($id, Request $request) {
        $fact = Fact::find($id);
        $fact->icon = $request->icon;
        $fact->title = $request->title;
        $fact->boldtext = $request->boldtext;
        $fact->text = $request->text;
        $fact->updated_at = now();
        $fact->save();
        return redirect()->route("facts.index");
    }
}
