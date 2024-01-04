<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeccionTextosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seccion_textos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('seccion_id')->nullable();
            $table->foreign('seccion_id')->references('id')->on('seccion_pagina');
            $table->string('titulo');
            $table->string('informacion');
            $table->string('subtitulo');
            $table->string('sub_informacion');
            $table->string('img');
            $table->string('img_portada');
            $table->string('img_3');
            $table->string('img_4');
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
        Schema::dropIfExists('seccion_textos');
    }
}
