<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view("back.teams.all", compact("teams"));
    }

    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $article = Article::find($id);
        return view ("back.articles.edit", compact("article"));
    }

    public function update($id, Request $request)
    {
        $article = Article::find($id);
        $article->name = $request->name;
        $article->description = $request->description;
        $article->author = $request->author;
        $article->dateOfPublication = $request->dateOfPublication;
        $article->updated_at = now();

        $article->save();
        return redirect()->route("articles.index");
    }
}
