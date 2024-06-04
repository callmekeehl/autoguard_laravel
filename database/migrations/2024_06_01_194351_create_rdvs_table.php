<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRdvsTable extends Migration
{
    public function up()
    {
        Schema::create('rdvs', function (Blueprint $table) {
            $table->id('rdvId');
            $table->unsignedBigInteger('utilisateurId');
            $table->unsignedBigInteger('policeId');
            $table->dateTime('date');
            $table->string('motif');
            $table->timestamps();

            $table->foreign('utilisateurId')->references('utilisateurId')->on('utilisateurs')->onDelete('cascade');
            $table->foreign('policeId')->references('policeId')->on('polices')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('rdvs');
    }
}

