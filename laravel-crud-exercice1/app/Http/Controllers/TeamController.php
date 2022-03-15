<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view("back.teams.all", compact("teams"));
    }

    public function destroy($id)
    {
        $team = Team::find($id);
        $team->delete();
        return redirect()->back();        
    }

    public function edit($id)
    {
        $team = Team::find($id);
        return view("back.teams.edit", compact("team"));
    }

    public function update($id, Request $request)
    {
        $team = Team::find($id);
        $team->name = $request->name;
        $team->players = $request->players;
        $team->coach = $request->coach;
        $team->postes = $request->postes;
        $team->updated_at = now();
    }
}
