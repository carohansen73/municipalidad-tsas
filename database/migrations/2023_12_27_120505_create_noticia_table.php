<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticia', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->longText('descripcion');
            $table->unsignedBigInteger('categoria_id')->nullable();
            $table->foreign('categoria_id')->references('id')->on('noticia_categoria');
            $table->string('categoria');
            $table->boolean('destacada');
            $table->date('fecha');
            $table->unsignedBigInteger('seccion_id');
            $table->foreign('seccion_id')->references('id')->on('seccion');
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
        Schema::dropIfExists('noticia');
    }
}
