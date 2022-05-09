<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    //
    public function index()
    {
        $utilisateurs = Utilisateur::all();
        return view("/back/utilisateurs/all",compact("utilisateurs"));
    }
}
