<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadoMunicipalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleado_municipals', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('legajo')->nullable();
            $table->string('nombre', 100);
            $table->string('apellido', 100);
            $table->unsignedInteger('dni')->unique();
            $table->char('genero', 1)->nullable();
            $table->string('email')->nullable();
            $table->string('telefono')->nullable();
            $table->string('area', 50);
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
        Schema::dropIfExists('empleado_municipals');
    }
}
