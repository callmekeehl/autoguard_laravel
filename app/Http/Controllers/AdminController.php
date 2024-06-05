<?php

namespace App\Http\Controllers\Api;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return response()->json(Admin::all(), 200);
    }

    public function store(Request $request)
    {
        $admin = Admin::create($request->all());
        return response()->json($admin, 201);
    }

    public function show(Admin $admin)
    {
        return response()->json($admin, 200);
    }

    public function update(Request $request, Admin $admin)
    {
        $admin->update($request->all());
        return response()->json($admin, 200);
    }

    public function destroy(Admin $admin)
    {
        $admin->delete();
        return response()->json(null, 204);
    }
}
