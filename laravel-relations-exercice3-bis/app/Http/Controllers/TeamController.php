<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::where("id", "!=", 1)->get();
        return view("back.teams;all", compact("teams"));
    }

    public function create()
    {
        return view("back.teams.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|max:255",
            "country" => "required|max:255",
            "continent" => "required|max:255",
            "attack" => "required|integer",
            "center" => "require|integer",
            "defense" => "required|integer",
            "replacment" => "required|integer",
        ]);

        $team = new Team;
        $team->name = $request->name;
        $team->country = $request->country;
        $team->continent = $request->continent;
        $team->attack = $request->attack;
        $team->center = $request->center;
        $team->defense = $request->defense;
        $team->replacment = $request->replacment;
        $team->created_at = now();

        $team->save();

        return redirect()->route("team.index")->with("success", "L'équipe a bien été créée!");

    }

    public function show(Team $team)
    {

    }

    public function edit(Team $team)
    {
        return view('back.teams.edit', compact("team"));
    }

    public function update(Request $request, Team $team)
    {
        $request->validate([
            "name" => "required|255",
            "country" => "required|max:255",
            "continent" => "required|max:255",
            "attack" => "required|integer",
            "center" => "required|integer",
            "defense" => "required|integer",
            "replacment" => "required|integer",
        ]);

        $team->name = $request->name;
        $team->country = $request->country;
        $team->continent = $request->continent;
        $team->attack = $request->attack;
        $team->center = $request->defense;
        $team->defense = $request->defense;
        $team->replacment = $request->replacment;
        $team->created_at = now();

        $team->save();

        return redirect()->route("team.index")->with("success", "L'équipe a bien été modifiée!");
    }

    public function destroy(Team $team)
    {
        foreach ($team->players as $player)
        {
            $player->team_id = 1;
            $player->save();
        }
        $team->delete();
        return redirect()->back()->with("success", "L'équipe a bien été supprimée!");
    }
}
