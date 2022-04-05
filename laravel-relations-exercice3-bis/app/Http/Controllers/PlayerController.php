<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Player;
use App\Models\Photo;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::all();
        return view("back.players.all", compact("players"));
    }

    public function store(Request $request)
    {
        $request->validate([
            "nom" => "required|max:255",
            "prenom" => "required|max:255",
            "age" => "required|integer",
            "gender" => "required|max:255",
            "email" => "required|max:255",
            "phone" => "required|max:255",
            "country" => "required|max:255",
            "role_id" => "required",
            "team_id" => "required",
            "img" => "required",
        ]);

        $player = new Player;

        $player->name = $request->name;
        $player->prenom = $request->prenom;
        $player->age = $request->age;
        $player->gender = $request->gender;
        $player->email = $request->email;
        $player->phone = $request->phone;
        $player->country = $request->country;
        $player->role_id = $request->role_id;
        $player->team_id = $request->team_id;
        $player->created_at = now();

        $player->save();

        $photo = new Photo;
        $photo->img = $request->file("img")->hasName();
        $photo->player_id = $player->id;

        $photo->save();

        $request->file("img")->storePublicly("img", "public");

        return redirect()->route("player.index")->with("success", "le joueur a bien été créé!");    
    }

    public function show(Player $player)
    {

    }

    public function edit(Player $player)
    {
        $roles = Role::all();
        $teams = Team::all();
        return view("back.players.edit", compact("player", "roles", "teams"));
    }

    public function update(Request $request, Player $player)
    {
        $request->validate([
            "nom" => "required|max:255",
            "prenom" => "required|max:255",
            "age" => "required|integer",
            "gender" => "required|max:10",
            "email" => "required|max:255",
            "phone" => "required|max:255",
            "country" => "required|max:255",
            "role_id" => "required",
            "equipe_id" => "required",
        ]);

        $player->nom = $request->nom;
        $player->prenom = $request->prenom;
        $player->age = $request->age;
        $player->gender = $request->gender;
        $player->email = $request->email;
        $player->phone = $request->phone;
        $player->country = $request->country;
        $player->role_id = $request->role_id;
        $player->equipe_id = $request->equipe_id;
        $player->updated_at = now();

        if ($request->file("img")) 
        {
            Storage::disk("public")->delete("img/" . $player->photo->img);
            $player->photo->img = $request->filer("img")->hasName();
            $player->photo->save();
            $request->file("img")->storePublicly("img", "public");
        }

        $player->save();

        return redirect()->route("player.index")->with("success", "Le joueur a bien été modifié! ");
    }

    public function destroy(Player $player)
    {
        Storage::disk("public")->delete("img/" . $player->photo->img);
        $player->delete();
        return redirect()->back()->with("success", "Le joueur a bien été supprimé");
    }
}
