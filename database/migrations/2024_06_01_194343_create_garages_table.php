<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGaragesTable extends Migration
{
    public function up()
    {
        Schema::create('garages', function (Blueprint $table) {
            $table->id('garageId');
            $table->unsignedBigInteger('utilisateurId');
            $table->string('nomGarage');
            $table->string('adresseGarage');
            $table->timestamps();

            $table->foreign('utilisateurId')->references('utilisateurId')->on('utilisateurs')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('garages');
    }
}

