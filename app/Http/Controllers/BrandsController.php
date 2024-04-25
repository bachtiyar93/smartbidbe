<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return response()->json($brands);
    }
    public function store(Request $request)
    {
        $brand = Brand::create($request->all());
        return response()->json($brand, 201);
    }
    public function show($id)
    {
        $brand = Brand::find($id);
        return response()->json($brand);
    }
    public function update(Request $request, $id)
    {
        $brand = Brand::find($id);
        $brand->update($request->all());
        return response()->json($brand);
    }
    public function destroy($id)
    {
        $brand = Brand::find($id);
        $brand->delete();
        return response()->json(null, 204);
    }
}
