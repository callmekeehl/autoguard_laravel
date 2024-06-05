<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UtilisateurController;
use App\Http\Controllers\Api\PoliceController;
use App\Http\Controllers\Api\GarageController;
use App\Http\Controllers\Api\RdvController;
use App\Http\Controllers\Api\DeclarationController;
use App\Http\Controllers\Api\NotificationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Routes accessibles sans authentification
Route::post('/register', [UtilisateurController::class, 'register']);
Route::post('/login', [UtilisateurController::class, 'login']);

// Routes nécessitant une authentification
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [UtilisateurController::class, 'logout']);

    Route::apiResource('utilisateurs', UtilisateurController::class);
    Route::apiResource('polices', PoliceController::class);
    Route::apiResource('garages', GarageController::class);
    Route::apiResource('rdvs', RdvController::class);
    Route::apiResource('declarations', DeclarationController::class);
    Route::apiResource('notifications', NotificationController::class);
});
