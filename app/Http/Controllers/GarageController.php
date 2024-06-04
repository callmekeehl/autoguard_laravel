<?php
namespace App\Http\Controllers\Api;

use App\Models\Garage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GarageController extends Controller
{
    public function index()
    {
        return response()->json(Garage::all(), 200);
    }

    public function store(Request $request)
    {
        $garage = Garage::create($request->all());
        return response()->json($garage, 201);
    }

    public function show(Garage $garage)
    {
        return response()->json($garage, 200);
    }

    public function update(Request $request, Garage $garage)
    {
        $garage->update($request->all());
        return response()->json($garage, 200);
    }

    public function destroy(Garage $garage)
    {
        $garage->delete();
        return response()->json(null, 204);
    }
}
