<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UtilisateurController;
use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\PoliceController;
use App\Http\Controllers\Api\GarageController;
use App\Http\Controllers\Api\NotificationController;
use App\Http\Controllers\Api\DeclarationController;
use App\Http\Controllers\Api\RdvController;

Route::middleware('auth:sanctum')->group(function () {

    // Routes Utilisateur
    Route::post('/utilisateurs', [UtilisateurController::class, 'store']);
    Route::get('/utilisateurs/{id}', [UtilisateurController::class, 'show']);
    Route::put('/utilisateurs/{id}', [UtilisateurController::class, 'update']);
    Route::delete('/utilisateurs/{id}', [UtilisateurController::class, 'destroy']);

    // Routes Admin
    Route::post('/admins', [AdminController::class, 'store']);
    Route::get('/admins/{id}', [AdminController::class, 'show']);
    Route::put('/admins/{id}', [AdminController::class, 'update']);
    Route::delete('/admins/{id}', [AdminController::class, 'destroy']);

    // Routes Police
    Route::post('/polices', [PoliceController::class, 'store']);
    Route::get('/polices/{id}', [PoliceController::class, 'show']);
    Route::put('/polices/{id}', [PoliceController::class, 'update']);
    Route::delete('/polices/{id}', [PoliceController::class, 'destroy']);

    // Routes Garage
    Route::post('/garages', [GarageController::class, 'store']);
    Route::get('/garages/{id}', [GarageController::class, 'show']);
    Route::put('/garages/{id}', [GarageController::class, 'update']);
    Route::delete('/garages/{id}', [GarageController::class, 'destroy']);

    // Routes Notifications
    Route::post('/notifications', [NotificationController::class, 'store']);
    Route::get('/notifications/{id}', [NotificationController::class, 'show']);
    Route::put('/notifications/{id}', [NotificationController::class, 'update']);
    Route::delete('/notifications/{id}', [NotificationController::class, 'destroy']);

    // Routes Declarations
    Route::post('/declarations', [DeclarationController::class, 'store']);
    Route::get('/declarations/{id}', [DeclarationController::class, 'show']);
    Route::put('/declarations/{id}', [DeclarationController::class, 'update']);
    Route::delete('/declarations/{id}', [DeclarationController::class, 'destroy']);

    // Routes RDV
    Route::post('/rdvs', [RdvController::class, 'store']);
    Route::get('/rdvs/{id}', [RdvController::class, 'show']);
    Route::put('/rdvs/{id}', [RdvController::class, 'update']);
    Route::delete('/rdvs/{id}', [RdvController::class, 'destroy']);
});

