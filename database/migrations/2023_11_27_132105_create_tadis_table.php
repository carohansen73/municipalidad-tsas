<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTadisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_tadi', function (Blueprint $table) {
            $table->id();
            $table->string('apellido');
            $table->string('nombre');
            $table->string('email');
            $table->string('domicilio');
            $table->string('dni');
            $table->string('nro_tramite');
            $table->date('fecha_nacimiento');
            $table->string('genero');
            $table->string('telefono');
            $table->string('contrasenia');
            $table->rememberToken();
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
        Schema::dropIfExists('tadis');
    }
}
