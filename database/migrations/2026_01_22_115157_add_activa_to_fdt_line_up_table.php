<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddActivaToFdtLineUpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::table('fdt_line_up', function (Blueprint $table) {
            $table->boolean('activa')->default(true)->after('img');
        });
    }

    public function down(): void
    {
        Schema::table('fdt_line_up', function (Blueprint $table) {
            $table->dropColumn('activa');
        });
    }
}
