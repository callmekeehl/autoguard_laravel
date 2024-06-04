<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Utilisateur extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = 'utilisateurId';

    protected $fillable = [
        'nom', 'prenom', 'email', 'adresse', 'telephone', 'motDePasse',
    ];

    public function notifications()
    {
        return $this->hasMany(Notification::class, 'utilisateurId');
    }

    public function declarations()
    {
        return $this->hasMany(Declaration::class, 'utilisateurId');
    }

    public function rdvs()
    {
        return $this->hasMany(Rdv::class, 'utilisateurId');
    }
}

