<?php

namespace App\Http\Controllers\Api;

use App\Models\Notification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NotificationController extends Controller
{
    public function index()
    {
        return response()->json(Notification::all(), 200);
    }

    public function store(Request $request)
    {
        $notification = Notification::create($request->all());
        return response()->json($notification, 201);
    }

    public function show(Notification $notification)
    {
        return response()->json($notification, 200);
    }

    public function update(Request $request, Notification $notification)
    {
        $notification->update($request->all());
        return response()->json($notification, 200);
    }

    public function destroy(Notification $notification)
    {
        $notification->delete();
        return response()->json(null, 204);
    }
}
