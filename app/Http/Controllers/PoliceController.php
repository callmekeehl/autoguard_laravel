<?php

namespace App\Http\Controllers\Api;

use App\Models\Police;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PoliceController extends Controller
{
    public function index()
    {
        return response()->json(Police::all(), 200);
    }

    public function store(Request $request)
    {
        $police = Police::create($request->all());
        return response()->json($police, 201);
    }

    public function show(Police $police)
    {
        return response()->json($police, 200);
    }

    public function update(Request $request, Police $police)
    {
        $police->update($request->all());
        return response()->json($police, 200);
    }

    public function destroy(Police $police)
    {
        $police->delete();
        return response()->json(null, 204);
    }
}
