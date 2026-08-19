<?php

namespace Database\Seeders;

use App\Models\Publico;
use Illuminate\Database\Seeder;

class PublicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $publicos = [
            'Infantil (0-12)',
            'Juvenil (13-17)',
            'Adulto (18-59)',
            'Adulto Mayor (60+)',
            'Todos',
        ];

        foreach ($publicos as $nombre) {
            Publico::firstOrCreate(['nombre' => $nombre]);
        }
    }
}
