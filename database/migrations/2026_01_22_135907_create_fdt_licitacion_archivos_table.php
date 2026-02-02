<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFdtLicitacionArchivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fdt_licitacion_archivos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('licitacion_id')
                ->constrained('fdt_licitaciones')
                ->onDelete('cascade');
            $table->string('titulo', 30);
            $table->string('archivo'); // path del PDF
            $table->boolean('activa')->default(true);
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
        Schema::dropIfExists('fdt_licitacion_archivos');
    }
}
