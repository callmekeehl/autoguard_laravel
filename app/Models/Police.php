<?php

// app/Models/Police.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Police extends Model
{
    protected $primaryKey = 'policeId';

    protected $fillable = ['utilisateurId', 'nomDepartement', 'adresseDepartement'];

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'utilisateurId');
    }

    public function rdvs()
    {
        return $this->hasMany(Rdv::class, 'policeId');
    }
}
