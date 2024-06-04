<?php

// app/Models/Declaration.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Declaration extends Model
{
    protected $primaryKey = 'declarationId';

    protected $fillable = [
        'utilisateurId', 'nomProprio', 'prenomProprio', 'telephoneProprio', 
        'lieuLong', 'lieuLat', 'photoCarteGrise', 'numChassis', 
        'numPlaque', 'marque', 'modele', 'dateHeure', 'statut'
    ];

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'utilisateurId');
    }
}
