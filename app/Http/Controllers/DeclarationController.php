<?php

namespace App\Http\Controllers\Api;

use App\Models\Declaration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeclarationController extends Controller
{
    public function index()
    {
        return response()->json(Declaration::all(), 200);
    }

    public function store(Request $request)
    {
        $declaration = Declaration::create($request->all());
        return response()->json($declaration, 201);
    }

    public function show(Declaration $declaration)
    {
        return response()->json($declaration, 200);
    }

    public function update(Request $request, Declaration $declaration)
    {
        $declaration->update($request->all());
        return response()->json($declaration, 200);
    }

    public function destroy(Declaration $declaration)
    {
        $declaration->delete();
        return response()->json(null, 204);
    }
}

