<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTalleresActividadHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talleres_actividad_horarios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('actividad_id')->constrained('talleres_actividades')->cascadeOnDelete();
            $table->string('dia_semana');
            $table->time('hora_inicio');
            $table->time('hora_fin')->nullable();
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
        Schema::dropIfExists('talleres_actividad_horarios');
    }
}
