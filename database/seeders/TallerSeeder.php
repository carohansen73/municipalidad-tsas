<?php

namespace Database\Seeders;

use App\Models\Actividad;
use App\Models\ActividadHorario;
use App\Models\CategoriaActividad;
use App\Models\Institucion;
use App\Models\Publico;
use App\Models\Taller;
use Illuminate\Database\Seeder;

class TallerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $publico = Publico::where('nombre', 'Adulto Mayor (60+)')->firstOrFail();

        $talleres = [
            [
                'nombre' => 'Gimnasia',
                'categoria' => 'Gimnasia / Actividad Física',
                'lugares' => [
                    ['institucion' => 'Meister', 'modalidad' => 'gratuita', 'horarios' => [
                        ['dia' => 'lunes', 'inicio' => '08:30', 'fin' => null],
                        ['dia' => 'jueves', 'inicio' => '08:30', 'fin' => null],
                    ]],
                    ['institucion' => 'La Tranquera', 'modalidad' => 'gratuita', 'horarios' => [
                        ['dia' => 'lunes', 'inicio' => '08:30', 'fin' => null],
                        ['dia' => 'jueves', 'inicio' => '08:30', 'fin' => null],
                    ]],
                    ['institucion' => 'Centro de Jubilados y Pensionados', 'modalidad' => 'arancelada', 'horarios' => [
                        ['dia' => 'lunes', 'inicio' => '09:30', 'fin' => null],
                        ['dia' => 'martes', 'inicio' => '17:00', 'fin' => null],
                        ['dia' => 'jueves', 'inicio' => '17:00', 'fin' => null],
                        ['dia' => 'viernes', 'inicio' => '09:30', 'fin' => null],
                    ]],
                ],
            ],
            [
                'nombre' => 'Estimulación Cognitiva',
                'categoria' => 'Estimulación Cognitiva',
                'lugares' => [
                    ['institucion' => 'Museo Municipal José A. Mulazzi', 'modalidad' => 'gratuita', 'horarios' => [
                        ['dia' => 'lunes', 'inicio' => '09:00', 'fin' => null],
                        ['dia' => 'viernes', 'inicio' => '09:00', 'fin' => null],
                    ]],
                    ['institucion' => 'Biblioteca Vicente P. Cacuri', 'modalidad' => 'arancelada', 'horarios' => [
                        ['dia' => 'lunes', 'inicio' => '09:15', 'fin' => null],
                        ['dia' => 'lunes', 'inicio' => '10:00', 'fin' => '11:30'],
                    ]],
                    ['institucion' => 'B. Barrio Boca', 'modalidad' => 'gratuita', 'horarios' => [
                        ['dia' => 'lunes', 'inicio' => '09:40', 'fin' => null],
                        ['dia' => 'lunes', 'inicio' => '10:10', 'fin' => null],
                    ]],
                    ['institucion' => 'Centro de Jubilados y Pensionados', 'modalidad' => 'arancelada', 'horarios' => [
                        ['dia' => 'martes', 'inicio' => '15:00', 'fin' => null],
                        ['dia' => 'jueves', 'inicio' => '08:30', 'fin' => null],
                    ]],
                    ['institucion' => 'ALPI Tres Arroyos', 'modalidad' => 'arancelada', 'horarios' => [
                        ['dia' => 'jueves', 'inicio' => '16:00', 'fin' => null],
                        ['dia' => 'viernes', 'inicio' => '14:00', 'fin' => null],
                    ]],
                    ['institucion' => 'Centro Cultural La Estación', 'modalidad' => 'arancelada', 'horarios' => [
                        ['dia' => 'jueves', 'inicio' => '16:30', 'fin' => null],
                    ]],
                    ['institucion' => 'Fundación Dr. J. Campano', 'modalidad' => 'arancelada', 'horarios' => [
                        ['dia' => 'viernes', 'inicio' => '15:00', 'fin' => null],
                        ['dia' => 'viernes', 'inicio' => '17:00', 'fin' => null],
                    ]],
                ],
            ],
            [
                'nombre' => 'Aquagym',
                'categoria' => 'Aquagym',
                'lugares' => [
                    ['institucion' => 'Aquatica', 'modalidad' => 'arancelada', 'horarios' => [
                        ['dia' => 'lunes', 'inicio' => '10:30', 'fin' => null],
                        ['dia' => 'lunes', 'inicio' => '15:30', 'fin' => null],
                        ['dia' => 'martes', 'inicio' => '08:45', 'fin' => null],
                        ['dia' => 'martes', 'inicio' => '09:30', 'fin' => null],
                        ['dia' => 'miercoles', 'inicio' => '09:30', 'fin' => null],
                        ['dia' => 'miercoles', 'inicio' => '10:10', 'fin' => null],
                        ['dia' => 'miercoles', 'inicio' => '15:00', 'fin' => null],
                        ['dia' => 'jueves', 'inicio' => '08:45', 'fin' => null],
                        ['dia' => 'jueves', 'inicio' => '09:30', 'fin' => null],
                        ['dia' => 'jueves', 'inicio' => '15:45', 'fin' => null],
                        ['dia' => 'viernes', 'inicio' => '09:30', 'fin' => null],
                        ['dia' => 'viernes', 'inicio' => '10:10', 'fin' => null],
                    ]],
                ],
            ],
            [
                'nombre' => 'Saludablemente',
                'categoria' => 'Bienestar',
                'lugares' => [
                    ['institucion' => 'PEMTA', 'modalidad' => 'gratuita', 'horarios' => [
                        ['dia' => 'lunes', 'inicio' => '14:30', 'fin' => '15:30'],
                    ]],
                ],
            ],
            [
                'nombre' => 'Flexibilidad y Movilidad',
                'categoria' => 'Gimnasia / Actividad Física',
                'lugares' => [
                    ['institucion' => 'ALPI Tres Arroyos', 'modalidad' => 'arancelada', 'horarios' => [
                        ['dia' => 'lunes', 'inicio' => '15:00', 'fin' => null],
                        ['dia' => 'lunes', 'inicio' => '16:00', 'fin' => null],
                        ['dia' => 'miercoles', 'inicio' => '16:00', 'fin' => null],
                    ]],
                ],
            ],
            [
                'nombre' => 'Yoga en Silla',
                'categoria' => 'Yoga',
                'lugares' => [
                    ['institucion' => 'Centro de Jubilados y Pensionados', 'modalidad' => 'arancelada', 'horarios' => [
                        ['dia' => 'lunes', 'inicio' => '16:00', 'fin' => null],
                        ['dia' => 'miercoles', 'inicio' => '16:00', 'fin' => null],
                    ]],
                    ['institucion' => 'PEMTA', 'modalidad' => 'gratuita', 'horarios' => [
                        ['dia' => 'martes', 'inicio' => '11:00', 'fin' => '12:00'],
                        ['dia' => 'martes', 'inicio' => '14:30', 'fin' => '15:30'],
                        ['dia' => 'jueves', 'inicio' => '11:00', 'fin' => '12:00'],
                        ['dia' => 'jueves', 'inicio' => '14:30', 'fin' => '15:30'],
                    ]],
                    ['institucion' => 'Fundación Dr. J. Campano', 'modalidad' => 'arancelada', 'horarios' => [
                        ['dia' => 'martes', 'inicio' => '14:30', 'fin' => null],
                    ]],
                ],
            ],
            [
                'nombre' => 'Tango Principiantes',
                'categoria' => 'Danza',
                'lugares' => [
                    ['institucion' => 'Centro Cultural La Estación', 'modalidad' => 'gratuita', 'horarios' => [
                        ['dia' => 'lunes', 'inicio' => '18:00', 'fin' => null],
                    ]],
                ],
            ],
            [
                'nombre' => 'Tango Avanzado',
                'categoria' => 'Danza',
                'lugares' => [
                    ['institucion' => 'Centro Cultural La Estación', 'modalidad' => 'gratuita', 'horarios' => [
                        ['dia' => 'lunes', 'inicio' => '19:00', 'fin' => null],
                    ]],
                ],
            ],
            [
                'nombre' => 'Yoga Integral',
                'categoria' => 'Yoga',
                'lugares' => [
                    ['institucion' => 'Biblioteca Vicente P. Cacuri', 'modalidad' => 'arancelada', 'horarios' => [
                        ['dia' => 'lunes', 'inicio' => '19:00', 'fin' => null],
                        ['dia' => 'martes', 'inicio' => '18:30', 'fin' => null],
                        ['dia' => 'miercoles', 'inicio' => '19:00', 'fin' => null],
                        ['dia' => 'jueves', 'inicio' => '18:30', 'fin' => null],
                    ]],
                ],
            ],
            [
                'nombre' => 'Yoga',
                'categoria' => 'Yoga',
                'lugares' => [
                    ['institucion' => 'Centro de Jubilados y Pensionados', 'modalidad' => 'arancelada', 'horarios' => [
                        ['dia' => 'martes', 'inicio' => '09:00', 'fin' => null],
                        ['dia' => 'jueves', 'inicio' => '09:00', 'fin' => null],
                    ]],
                ],
            ],
            [
                'nombre' => 'Terapia Cognitiva',
                'categoria' => 'Estimulación Cognitiva',
                'lugares' => [
                    ['institucion' => 'Jauretche', 'modalidad' => 'gratuita', 'horarios' => [
                        ['dia' => 'martes', 'inicio' => '10:00', 'fin' => null],
                    ]],
                ],
            ],
            [
                'nombre' => 'Tecnología',
                'categoria' => 'Tecnología',
                'lugares' => [
                    ['institucion' => 'Biblioteca Vicente P. Cacuri', 'modalidad' => 'arancelada', 'horarios' => [
                        ['dia' => 'martes', 'inicio' => '11:00', 'fin' => null],
                        ['dia' => 'martes', 'inicio' => '15:00', 'fin' => null],
                    ]],
                    ['institucion' => 'Biblioteca Sarmiento', 'modalidad' => 'gratuita', 'horarios' => [
                        ['dia' => 'miercoles', 'inicio' => '10:00', 'fin' => null],
                    ]],
                ],
            ],
            [
                'nombre' => 'Mundo Cocina',
                'categoria' => 'Cocina / Nutrición',
                'lugares' => [
                    ['institucion' => 'Biblioteca Vicente P. Cacuri', 'modalidad' => 'arancelada', 'horarios' => [
                        ['dia' => 'martes', 'inicio' => '14:00', 'fin' => null],
                        ['dia' => 'miercoles', 'inicio' => '09:30', 'fin' => null],
                    ]],
                ],
            ],
            [
                'nombre' => 'Estimulación Visual',
                'categoria' => 'Estimulación Cognitiva',
                'lugares' => [
                    ['institucion' => 'B. Barrio Boca', 'modalidad' => 'gratuita', 'horarios' => [
                        ['dia' => 'martes', 'inicio' => '14:00', 'fin' => '15:00'],
                    ]],
                ],
            ],
            [
                'nombre' => 'Inglés',
                'categoria' => 'Idiomas',
                'lugares' => [
                    ['institucion' => 'PEMTA', 'modalidad' => 'gratuita', 'horarios' => [
                        ['dia' => 'martes', 'inicio' => '14:30', 'fin' => '16:30'],
                    ]],
                ],
            ],
            [
                'nombre' => 'Tango',
                'categoria' => 'Danza',
                'lugares' => [
                    ['institucion' => 'Centro de Jubilados y Pensionados', 'modalidad' => 'arancelada', 'horarios' => [
                        ['dia' => 'martes', 'inicio' => '16:00', 'fin' => null],
                        ['dia' => 'viernes', 'inicio' => '16:00', 'fin' => null],
                    ]],
                ],
            ],
            [
                'nombre' => 'Los Mejores Años',
                'categoria' => 'Cultura / Cine / Charlas',
                'lugares' => [
                    ['institucion' => 'Fundación Dr. J. Campano', 'modalidad' => 'arancelada', 'horarios' => [
                        ['dia' => 'martes', 'inicio' => '17:00', 'fin' => null],
                    ]],
                ],
            ],
            [
                'nombre' => 'Crochet / Pintura',
                'categoria' => 'Manualidades / Talleres Artísticos',
                'lugares' => [
                    ['institucion' => 'Centro Cultural La Estación', 'modalidad' => 'gratuita', 'horarios' => [
                        ['dia' => 'martes', 'inicio' => '18:00', 'fin' => null],
                    ]],
                ],
            ],
            [
                'nombre' => 'Newcom',
                'categoria' => 'Deporte',
                'lugares' => [
                    ['institucion' => 'Polideportivo', 'modalidad' => 'gratuita', 'horarios' => [
                        ['dia' => 'martes', 'inicio' => '18:30', 'fin' => null],
                        ['dia' => 'jueves', 'inicio' => '18:30', 'fin' => null],
                    ]],
                ],
            ],
            [
                'nombre' => 'Mindfulness',
                'categoria' => 'Bienestar',
                'lugares' => [
                    ['institucion' => 'Fundación Dr. J. Campano', 'modalidad' => 'arancelada', 'horarios' => [
                        ['dia' => 'martes', 'inicio' => '19:00', 'fin' => null],
                        ['dia' => 'jueves', 'inicio' => '19:00', 'fin' => null],
                    ]],
                ],
            ],
            [
                'nombre' => 'Folclore',
                'categoria' => 'Danza',
                'lugares' => [
                    ['institucion' => 'Biblioteca Vicente P. Cacuri', 'modalidad' => 'arancelada', 'horarios' => [
                        ['dia' => 'martes', 'inicio' => '20:15', 'fin' => null],
                    ]],
                    ['institucion' => 'Centro Cultural La Estación', 'modalidad' => 'gratuita', 'horarios' => [
                        ['dia' => 'jueves', 'inicio' => '18:00', 'fin' => null],
                        ['dia' => 'viernes', 'inicio' => '19:00', 'fin' => null],
                    ]],
                ],
            ],
            [
                'nombre' => 'Chi Kung',
                'categoria' => 'Bienestar',
                'lugares' => [
                    ['institucion' => 'PEMTA', 'modalidad' => 'gratuita', 'horarios' => [
                        ['dia' => 'miercoles', 'inicio' => '09:00', 'fin' => '10:30'],
                    ]],
                ],
            ],
            [
                'nombre' => 'Celular y Cuentas Claras',
                'categoria' => 'Tecnología',
                'lugares' => [
                    ['institucion' => 'PEMTA', 'modalidad' => 'gratuita', 'horarios' => [
                        ['dia' => 'miercoles', 'inicio' => '09:00', 'fin' => '10:30'],
                    ]],
                ],
            ],
            [
                'nombre' => 'Recreación / Estimulación Cognitiva',
                'categoria' => 'Recreación',
                'lugares' => [
                    ['institucion' => 'Meister', 'modalidad' => 'gratuita', 'horarios' => [
                        ['dia' => 'miercoles', 'inicio' => '09:30', 'fin' => null],
                    ]],
                ],
            ],
            [
                'nombre' => 'Cerámica',
                'categoria' => 'Manualidades / Talleres Artísticos',
                'lugares' => [
                    ['institucion' => 'Centro Cultural La Estación', 'modalidad' => 'gratuita', 'horarios' => [
                        ['dia' => 'miercoles', 'inicio' => '15:30', 'fin' => null],
                    ]],
                ],
            ],
            [
                'nombre' => 'Desafíos para la Mente',
                'categoria' => 'Estimulación Cognitiva',
                'lugares' => [
                    ['institucion' => 'PEMTA', 'modalidad' => 'gratuita', 'horarios' => [
                        ['dia' => 'miercoles', 'inicio' => '16:00', 'fin' => '17:30'],
                    ]],
                ],
            ],
            [
                'nombre' => 'Yoga en Colchoneta',
                'categoria' => 'Yoga',
                'lugares' => [
                    ['institucion' => 'Centro de Jubilados y Pensionados', 'modalidad' => 'arancelada', 'horarios' => [
                        ['dia' => 'miercoles', 'inicio' => '16:00', 'fin' => null],
                    ]],
                ],
            ],
            [
                'nombre' => 'Crochet',
                'categoria' => 'Manualidades / Talleres Artísticos',
                'lugares' => [
                    ['institucion' => 'Biblioteca Vicente P. Cacuri', 'modalidad' => 'arancelada', 'horarios' => [
                        ['dia' => 'miercoles', 'inicio' => '18:00', 'fin' => null],
                    ]],
                    ['institucion' => 'Centro de Jubilados y Pensionados', 'modalidad' => 'arancelada', 'horarios' => [
                        ['dia' => 'viernes', 'inicio' => '15:30', 'fin' => null],
                    ]],
                ],
            ],
            [
                'nombre' => 'Bordado',
                'categoria' => 'Manualidades / Talleres Artísticos',
                'lugares' => [
                    ['institucion' => 'Centro Cultural La Estación', 'modalidad' => 'gratuita', 'horarios' => [
                        ['dia' => 'jueves', 'inicio' => '09:00', 'fin' => null],
                    ]],
                ],
            ],
            [
                'nombre' => 'Musicoterapia',
                'categoria' => 'Musicoterapia',
                'lugares' => [
                    ['institucion' => 'Centro de Jubilados y Pensionados', 'modalidad' => 'arancelada', 'horarios' => [
                        ['dia' => 'jueves', 'inicio' => '16:00', 'fin' => null],
                    ]],
                ],
            ],
            [
                'nombre' => '¿Mis Mejores Años de Vida?',
                'categoria' => 'Cultura / Cine / Charlas',
                'lugares' => [
                    ['institucion' => 'PEMTA', 'modalidad' => 'gratuita', 'horarios' => [
                        ['dia' => 'jueves', 'inicio' => '17:00', 'fin' => '18:30'],
                    ]],
                ],
            ],
            [
                'nombre' => 'Cocina Saludable',
                'categoria' => 'Cocina / Nutrición',
                'lugares' => [
                    ['institucion' => 'Centro Cultural La Estación', 'modalidad' => 'gratuita', 'horarios' => [
                        ['dia' => 'jueves', 'inicio' => '17:00', 'fin' => null],
                    ]],
                ],
            ],
            [
                'nombre' => 'Teatro',
                'categoria' => 'Cultura / Cine / Charlas',
                'lugares' => [
                    ['institucion' => 'Centro Cultural La Estación', 'modalidad' => 'gratuita', 'horarios' => [
                        ['dia' => 'jueves', 'inicio' => '19:00', 'fin' => null],
                    ]],
                ],
            ],
            [
                'nombre' => 'Charlas / Muestras',
                'categoria' => 'Cultura / Cine / Charlas',
                'lugares' => [
                    ['institucion' => 'Museo Municipal José A. Mulazzi', 'modalidad' => 'gratuita', 'horarios' => [
                        ['dia' => 'jueves', 'inicio' => '20:00', 'fin' => null],
                    ]],
                ],
            ],
            [
                'nombre' => 'Recreación',
                'categoria' => 'Recreación',
                'lugares' => [
                    ['institucion' => 'Polideportivo', 'modalidad' => 'gratuita', 'horarios' => [
                        ['dia' => 'viernes', 'inicio' => '09:00', 'fin' => null],
                    ]],
                ],
            ],
            [
                'nombre' => 'Taller de Memoria',
                'categoria' => 'Talleres de Memoria',
                'lugares' => [
                    ['institucion' => 'Centro de Jubilados y Pensionados', 'modalidad' => 'arancelada', 'horarios' => [
                        ['dia' => 'viernes', 'inicio' => '09:00', 'fin' => null],
                        ['dia' => 'viernes', 'inicio' => '10:15', 'fin' => null],
                    ]],
                ],
            ],
            [
                'nombre' => 'Cine / Reflexión',
                'categoria' => 'Cultura / Cine / Charlas',
                'lugares' => [
                    ['institucion' => 'Museo Municipal José A. Mulazzi', 'modalidad' => 'gratuita', 'horarios' => [
                        ['dia' => 'viernes', 'inicio' => '18:00', 'fin' => null],
                    ]],
                ],
            ],
        ];

        foreach ($talleres as $tallerData) {
            $categoria = CategoriaActividad::where('nombre', $tallerData['categoria'])->firstOrFail();

            $taller = Taller::firstOrCreate(
                ['nombre' => $tallerData['nombre']],
                [
                    'categoria_id' => $categoria->id,
                    'publico_id' => $publico->id,
                    'activo' => true,
                ]
            );

            foreach ($tallerData['lugares'] as $lugarData) {
                $institucion = Institucion::where('nombre', $lugarData['institucion'])->firstOrFail();

                $actividad = Actividad::firstOrCreate(
                    [
                        'taller_id' => $taller->id,
                        'institucion_id' => $institucion->id,
                        'modalidad' => $lugarData['modalidad'],
                    ],
                    [
                        'destacado' => false,
                        'activo' => true,
                    ]
                );

                foreach ($lugarData['horarios'] as $horarioData) {
                    ActividadHorario::firstOrCreate(
                        [
                            'actividad_id' => $actividad->id,
                            'dia_semana' => $horarioData['dia'],
                            'hora_inicio' => $horarioData['inicio'],
                        ],
                        [
                            'hora_fin' => $horarioData['fin'],
                        ]
                    );
                }
            }
        }
    }
}
