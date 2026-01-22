<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFdtTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fdt_tickets', function (Blueprint $table) {
            $table->id();
            // $table->text('titulo')->nullable();
            $table->longText('descripcion')->nullable();

            // Estados
            $table->enum('estado_venta_presencial', ['proximamente', 'activa', 'finalizada']);
            $table->enum('estado_venta_online', ['proximamente', 'activa', 'finalizada']);

            // Presencial
            $table->date('fecha_inicio_presencial')->nullable();
            $table->string('lugar_presencial')->nullable();
            $table->text('horarios_presencial')->nullable();

            // Online
            $table->date('fecha_inicio_online')->nullable();
            $table->string('url_venta_online')->nullable();

            // Contacto
            $table->string('whatsapp')->nullable();
            $table->string('email')->nullable();

            // Identidad de la edición
            $table->year('edicion_anio');
            $table->boolean('activa')->default(false);

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
        Schema::dropIfExists('fdt_tickets');
    }
}
