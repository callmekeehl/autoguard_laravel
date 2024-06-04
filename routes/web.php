<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\DeclarationController;
use App\Http\Controllers\PoliceController;
use App\Http\Controllers\GarageController;
use App\Http\Controllers\RdvController;
use App\Http\Controllers\AdminController;








Route::get('/', function () {
    return view('welcome');
});

// Routes pour Utilisateur
Route::resource('utilisateurs', UtilisateurController::class);

// Routes pour Admin
Route::resource('admins', AdminController::class);

// Routes pour Police
Route::resource('polices', PoliceController::class);

// Routes pour Garage
Route::resource('garages', GarageController::class);

// Routes pour Notification
Route::resource('notifications', NotificationController::class);

// Routes pour Declaration
Route::resource('declarations', DeclarationController::class);

// Routes pour Rdv
Route::resource('rdvs', RdvController::class);