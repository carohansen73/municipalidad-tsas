<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscripcionesSorteoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripciones_sorteo', function (Blueprint $table) {
            $table->id();
            $table->foreignId('empleado_municipal_id')
                ->constrained('empleado_municipals')
                ->cascadeOnDelete();
            $table->unsignedInteger('numero_inscripcion')->unique();
            $table->boolean('valida')->default(true);
            $table->timestamps();
            //Corrobora que se puedan inscribir una única vez
            $table->unique('empleado_municipal_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscripciones_sorteo');
    }
}
