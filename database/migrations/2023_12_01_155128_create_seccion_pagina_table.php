<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeccionPaginaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seccion_pagina', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->enum('pertenece_a', ['Municipio', 'Tramites y servicios', 'Conoce TsAs'])->default('Municipio');
            $table->string('portada');
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
        Schema::dropIfExists('seccion_pagina');
    }
}
