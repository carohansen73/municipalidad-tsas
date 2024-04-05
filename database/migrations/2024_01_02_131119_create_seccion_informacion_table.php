<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeccionInformacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seccion_informacion', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('seccion_id')->nullable();
            $table->foreign('seccion_id')->references('id')->on('seccion');
            $table->string('titulo');
            $table->string('informacion');
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
        Schema::dropIfExists('seccion_informacion');
    }
}
