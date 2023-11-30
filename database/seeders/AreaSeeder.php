<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('area')->insert([
            'nombre'       => 'Computos'
        ]);
        DB::table('area')->insert([
            'nombre'       => 'Desarrollo social'
        ]);
        DB::table('area')->insert([
            'nombre'       => 'Gestion ambiental'
        ]);
        DB::table('area')->insert([
            'nombre'       => 'Mesa de entrada'
        ]);
        DB::table('area')->insert([
            'nombre'       =>  'Obras publicas'
        ]);
        DB::table('area')->insert([
            'nombre'       => 'Politicas tributarias'
        ]);
        DB::table('area')->insert([
            'nombre'       => 'Produccion'
        ]);
        DB::table('area')->insert([
            'nombre'       => 'Prensa'
        ]);
        DB::table('area')->insert([
            'nombre'       => 'Salud y prevencion'
        ]);
        DB::table('area')->insert([
            'nombre'       => 'Seguridad'
        ]);
        DB::table('area')->insert([
            'nombre'       => 'Secretaria de gobierno'
        ]);
        DB::table('area')->insert([
            'nombre'       => 'Secretaría de hacienda'
        ]);
    }
}
