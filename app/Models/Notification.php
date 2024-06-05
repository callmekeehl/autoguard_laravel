<?php
// app/Models/Notification.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $primaryKey = 'notificationId';

    protected $fillable = ['utilisateurId', 'message', 'dateEnvoi', 'lu'];

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'utilisateurId');
    }
}
