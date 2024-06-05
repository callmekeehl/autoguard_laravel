<?php
namespace App\Http\Controllers\Api;

use App\Models\Utilisateur;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UtilisateurController extends Controller
{
    public function index()
    {
        return response()->json(Utilisateur::all(), 200);
    }

    public function store(Request $request)
    {
        $utilisateur = Utilisateur::create($request->all());
        return response()->json($utilisateur, 201);
    }

    public function show(Utilisateur $utilisateur)
    {
        return response()->json($utilisateur, 200);
    }

    public function update(Request $request, Utilisateur $utilisateur)
    {
        $utilisateur->update($request->all());
        return response()->json($utilisateur, 200);
    }

    public function destroy(Utilisateur $utilisateur)
    {
        $utilisateur->delete();
        return response()->json(null, 204);
    }
}
