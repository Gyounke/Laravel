<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    //

    // public function __construct()
    // {
    //     $this->middleware('admin');
    // }
    
    public function index()
    {
        $services = Service::all();
        return view("/back/services/all",compact("services"));
    }

       /**
     * Show the form for creating a new resource.
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service = Service::all();
        return view("back/services/create",compact("service"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "icone" => "required|max:255",
            "title" => "required|max:255",
            "description" => "required|max:255",
        ]);

        $service = new Service;
        $service->icone = $request->icone;
        $service->title = $request->title;
        $service->description = $request->description;
        $service->save();

        return redirect()->route("services.index")->with("success", "User has been created !");
    }
    public function read($id)
    {
        $services = Service::find($id);
        return view("back/services/read",compact("services"));
    }
    public function edit($id)
    {
        $service = Service::find($id);
        return view("/back/services/edit",compact("service"));
    }
    public function update($id, Request $request)
    {
        $service = Service::find($id);
        $service->subtitle = $request->subtitle;
        $service->title = $request->title;
        /* $destination = "img/" . $service->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $service->image = $request->file("image")->hashName(); */
        $service->button = $request->button;
        $service->updated_at = now();
        $service->save();
        /* $request->file("image")->storePublicly("images", "public"); */
        return redirect()->route("services.index")->with('message', "Service updated");
    }
}