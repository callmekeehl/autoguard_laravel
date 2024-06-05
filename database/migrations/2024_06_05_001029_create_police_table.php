<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoliceTable extends Migration
{
    public function up()
    {
        Schema::create('polices', function (Blueprint $table) {
            $table->id('policeId');
            $table->unsignedBigInteger('utilisateurId');
            $table->string('nomDepartement');
            $table->string('adresseDepartement');
            $table->timestamps();

            $table->foreign('utilisateurId')->references('utilisateurId')->on('utilisateurs')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('polices');
    }
}

