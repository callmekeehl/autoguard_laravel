<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeclarationsTable extends Migration
{
    public function up()
    {
        Schema::create('declarations', function (Blueprint $table) {
            $table->id('declarationId');
            $table->unsignedBigInteger('utilisateurId');
            $table->string('nomProprio');
            $table->string('prenomProprio');
            $table->string('telephoneProprio');
            $table->string('lieuLong');
            $table->string('lieuLat');
            $table->binary('photoCarteGrise');
            $table->string('numChassis');
            $table->string('numPlaque');
            $table->string('marque');
            $table->string('modele');
            $table->dateTime('dateHeure');
            $table->integer('statut');
            $table->timestamps();

            $table->foreign('utilisateurId')->references('utilisateurId')->on('utilisateurs')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('declarations');
    }
}

