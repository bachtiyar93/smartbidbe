<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index()
   {
       $car = Car::with('image')->get();
       return response()->json($car);
   }

    public function store(Request $request)
    {
        $car = Car::create($request->all());
        foreach ($request->images as $imageData) {
            $image = new Image;
            $image->owner = $car->id;
            $image->save();
        }
        return response()->json($car->load('images'), 201);
    }
    public function show($id)
    {
        $car = Car::find($id);
        return response()->json($car);
    }
    public function update(Request $request, $id)
    {
        $car = Car::find($id);
        $car->update($request->all());
        return response()->json($car);
    }
    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();
        return response()->json(null, 204);
    }
}
