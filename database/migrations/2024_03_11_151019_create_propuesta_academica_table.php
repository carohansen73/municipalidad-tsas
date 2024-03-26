<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropuestaAcademicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propuesta_academica', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('periodo_inscripcion');
            $table->unsignedBigInteger('institucion_id');
            $table->foreign('institucion_id')->references('id')->on('institucion_educativa');
            $table->string('informacion');
            $table->string('links');
            $table->boolean('visible');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('propuesta_academica');
    }
}
