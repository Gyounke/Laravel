<?php

namespace App\Http\Controllers;

use App\Models\portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    function index() {
        $portfolio = Portfolio::all();
        return view('tables.portfoliotable', compact('portfolio'));
    }

    public function destroy($id){
        $portfolio = Portfolio::find($id);
        $portfolio->delete();
        return redirect()->back();
    }

    public function edit($id){
        $portfolio = Portfolio::find($id);
        return view('edit.portfolioedit', compact('portfolio'));
    }

    public function update($id, Request $request) {
        $portfolio = Portfolio::find($id);
        $portfolio->imgpath = $request->imgpath;
        $portfolio->tag = $request->tag;
        $portfolio->updated_at = now();
        $portfolio->save();
        return redirect()->route("portfolio.index");
    }
}
