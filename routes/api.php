<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UtilisateurController;
use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\PoliceController;
use App\Http\Controllers\Api\GarageController;
use App\Http\Controllers\Api\NotificationController;
use App\Http\Controllers\Api\DeclarationController;
use App\Http\Controllers\Api\RdvController;

Route::middleware('api')->group(function () {
    Route::apiResource('utilisateurs', UtilisateurController::class);
    Route::apiResource('admins', AdminController::class);
    Route::apiResource('polices', PoliceController::class);
    Route::apiResource('garages', GarageController::class);
    Route::apiResource('notifications', NotificationController::class);
    Route::apiResource('declarations', DeclarationController::class);
    Route::apiResource('rdvs', RdvController::class);
});
