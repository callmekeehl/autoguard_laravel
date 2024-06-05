<?php

// app/Models/Admin.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $primaryKey = 'adminId';

    protected $fillable = ['utilisateurId'];

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'utilisateurId');
    }
}

