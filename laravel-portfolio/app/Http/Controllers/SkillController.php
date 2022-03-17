<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    function index() {
        $skill = Skill::all();
        return view('tables.skilltable', compact('skill'));
    }

    public function destroy($id){
        $skill = Skill::find($id);
        $skill->delete();
        return redirect()->back();
    }

    public function edit($id){
        $skill = Skill::find($id);
        return view('edit.skilledit', compact('skill'));
    }

    public function update($id, Request $request) {
        $skill = Skill::find($id);
        $skill->langage = $request->langage;
        $skill->value = $request->value;
        $skill->level = $request->level;
        $skill->updated_at = now();
        $skill->save();
        return redirect()->route("skills.index");
    }
}
