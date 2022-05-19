<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TeacherController extends Controller
{
    
    
    public function index()
    {
        $teachers = Teacher::all();
        return view("/back/teachers/all",compact("teachers"));
    }
    public function show(Teacher $teacher)
    {
        return view("/back/teachers/show",compact("teacher"));
    }
    public function edit(Teacher $teacher)
    {
        $teachers = Teacher::all();
        return view("/back/teachers/edit",compact("teacher", "teachers"));
    }
    public function update(Teacher $teacher, Request $request)
    {
        $this->authorize('update', $teacher);
        $teacher->name = $request->name;
        $teacher->field = $request->field;
        $teacher->description = $request->description;
        $teacher->updated_at = now();
        $teacher->save();
        return redirect()->route("teachers.index")->with('message', "Teacher updated");
    }

    public function destroy(Teacher $teacher){
        $this->authorize('delete', $teacher);
        $teacher->delete();
        return redirect()->back()->with('message', 'Teacher destroyed');
    }

    public function create(){
        $teacher = Teacher::all();
        return view("back.teachers.create", compact("teacher"));
    }

    public function store(Request $request){
        
        $this->authorize('create', Teacher::class);
        $teacher = new Teacher;
        $validated = $request->validate([
            'name' => 'required',
            'field' => 'required',
            'description' => 'required',
        ]);
        $teacher->name = $request->name;
        $teacher->field = $request->field;
        $teacher->description = $request->description;
        $teacher->updated_at = now();
        $teacher->save();
        return redirect()->route("teachers.index")->with('message', 'Teacher created');
    }
}
