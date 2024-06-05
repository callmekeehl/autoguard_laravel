<?php

namespace App\Http\Controllers\Api;

use App\Models\Rdv;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RdvController extends Controller
{
    public function index()
    {
        return response()->json(Rdv::all(), 200);
    }

    public function store(Request $request)
    {
        $rdv = Rdv::create($request->all());
        return response()->json($rdv, 201);
    }

    public function show(Rdv $rdv)
    {
        return response()->json($rdv, 200);
    }

    public function update(Request $request, Rdv $rdv)
    {
        $rdv->update($request->all());
        return response()->json($rdv, 200);
    }

    public function destroy(Rdv $rdv)
    {
        $rdv->delete();
        return response()->json(null, 204);
    }
}
