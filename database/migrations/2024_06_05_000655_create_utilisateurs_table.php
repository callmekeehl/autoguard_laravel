<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilisateursTable extends Migration
{
    public function up()
    {
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->id('utilisateurId');
            $table->string('nom');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->string('adresse');
            $table->string('telephone');
            $table->string('motDePasse');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('utilisateurs');
    }
}
