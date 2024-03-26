<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGaleriaPortadaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galeria_portada', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->unsignedBigInteger('seccion_id');
            $table->foreign('secion_id')->references('id')->on('seccion_pagina');
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
        Schema::dropIfExists('galeria_portada');
    }
}
