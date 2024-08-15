<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('dni')->unique();
            $table->string('password');
            $table->enum('rol', ['Admin', 'Member', 'SuperAdmin'])->default('Member');
            $table->string('apellido');
            $table->string('nombre');
            $table->string('email');
            $table->string('domicilio');
            $table->string('nro_tramite');
            $table->date('fecha_nacimiento');
            $table->string('genero');
            $table->string('telefono');
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('users');
    }
}
