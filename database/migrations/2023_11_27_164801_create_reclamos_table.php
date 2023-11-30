<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReclamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reclamo', function (Blueprint $table) {
            $table->id();
            $table->string('titulo')->nullable();
            $table->string('descripcion');
            $table->string('area');
            $table->string('localidad');
            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('users');
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->foreign('admin_id')->references('id')->on('users');
            $table->enum('estado', ['IN', 'EP', 'CS', 'CN'])->default('IN');
            // IN:Nueva
            // EP:En Proceo
            // CS:cerrada Satistecha
            // CN:cerrada No Satistecha
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
        Schema::dropIfExists('reclamo');
    }
}
