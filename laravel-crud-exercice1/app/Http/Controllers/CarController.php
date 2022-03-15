<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view("back.cars.all", compact("cars"));
    }
    
    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete(); 
        return redirect()->back();
    }

    public function edit($id)
    {
        $car = Car::find($id);
        return view("back.cars.edit", compact("car"));
    }

    public function update($id, Request $request)
    {
        $car = Car::find($id);
        $car->brand = $request->brand;
        $car->year = $request->year;
        $car->color = $request->color;
        $car->price = $request->price;
        $car->reduction = $request->reduction;
        $car->updated_at = now();

        $car->save();
        return redirect()->route("cars.index");
    }
}
