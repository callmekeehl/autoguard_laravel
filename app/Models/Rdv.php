<?php

// app/Models/Rdv.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rdv extends Model
{
    protected $primaryKey = 'rdvId';

    protected $fillable = ['utilisateurId', 'policeId', 'date', 'motif'];

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'utilisateurId');
    }

    public function police()
    {
        return $this->belongsTo(Police::class, 'policeId');
    }
}

