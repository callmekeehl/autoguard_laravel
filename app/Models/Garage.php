<?php

// app/Models/Garage.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Garage extends Model
{
    protected $primaryKey = 'garageId';

    protected $fillable = ['utilisateurId', 'nomGarage', 'adresseGarage'];

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'utilisateurId');
    }
}
