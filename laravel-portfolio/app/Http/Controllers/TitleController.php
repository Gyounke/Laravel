<?php

namespace App\Http\Controllers;

use App\Models\Title;
use Illuminate\Http\Request;


class UserController extends Controller
{
    function index() {
        $title = Title::all();
        return view('tables.titletable', compact('title'));
    }

    public function destroy($id){
        $title = Title::find($id);
        $title->delete();
        return redirect()->back();
    }

    public function edit($id){
        $title = Title::find($id);
        return view('edit.titleedit', compact('title'));
    }

    public function update($id, Request $request) {
        $title = Title::find($id);
        $title->s_title = $request->s_title;
        $title->em = $request->em;
        $title->span = $request->span;
        $title->title_1 = $request->title_1;
        $title->title_2 = $request->title_2;
        $title->title_3 = $request->title_3;
        $title->updated_at = now();
        $title->save();
        return redirect()->route("titles.index");
    }

}
