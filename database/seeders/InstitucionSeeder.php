<?php

namespace Database\Seeders;

use App\Models\Institucion;
use Illuminate\Database\Seeder;

class InstitucionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $instituciones = [
            [
                'nombre' => 'Biblioteca Vicente P. Cacuri',
                'direccion' => 'Hipólito Yrigoyen 165',
                'telefono' => '2983 43-4209',
            ],
            [
                'nombre' => 'Fundación Dr. J. Campano',
                'direccion' => 'Hipólito Yrigoyen 252',
                'telefono' => '2983 42-6802',
            ],
            [
                'nombre' => 'Centro Cultural La Estación',
                'direccion' => 'Av. Ituzaingó 320',
                'telefono' => '2983 43-1603',
            ],
            [
                'nombre' => 'Museo Municipal José A. Mulazzi',
                'direccion' => 'Av. San Martín 323',
                'telefono' => '2983 43-4555',
            ],
            [
                'nombre' => 'Centro de Jubilados y Pensionados',
                'direccion' => 'Pedro N. Carrera 355',
                'telefono' => '2983 42-0204',
            ],
            [
                'nombre' => 'ALPI Tres Arroyos',
                'direccion' => 'Quintana 318',
                'telefono' => '2983 42-3557',
            ],
            [
                'nombre' => 'Meister',
                'direccion' => null,
                'telefono' => null,
            ],
            [
                'nombre' => 'La Tranquera',
                'direccion' => null,
                'telefono' => null,
            ],
            [
                'nombre' => 'B. Barrio Boca',
                'direccion' => null,
                'telefono' => null,
            ],
            [
                'nombre' => 'Aquatica',
                'direccion' => null,
                'telefono' => null,
            ],
            [
                'nombre' => 'PEMTA',
                'direccion' => null,
                'telefono' => null,
            ],
            [
                'nombre' => 'Jauretche',
                'direccion' => null,
                'telefono' => null,
            ],
            [
                'nombre' => 'Polideportivo',
                'direccion' => null,
                'telefono' => null,
            ],
            [
                'nombre' => 'Biblioteca Sarmiento',
                'direccion' => null,
                'telefono' => null,
            ],
        ];

        foreach ($instituciones as $institucion) {
            Institucion::firstOrCreate(
                ['nombre' => $institucion['nombre']],
                $institucion
            );
        }
    }
}
