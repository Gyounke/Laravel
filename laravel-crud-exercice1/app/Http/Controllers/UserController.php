<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function index() 
    {
        $users = User::all();
        return view("back.users.all", compact("users"));
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view("back.users.edit", compact("user"));
    }

    public function update($id, Request $request)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->updated_at = now();

        $user->save();
        return redirect()->route("users.index");
    }

}

