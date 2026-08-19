<?php

namespace Database\Seeders;

use App\Models\CategoriaActividad;
use Illuminate\Database\Seeder;

class CategoriaActividadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias = [
            ['nombre' => 'Estimulación Cognitiva', 'icono' => 'fas fa-brain', 'color' => '#6f42c1'],
            ['nombre' => 'Gimnasia / Actividad Física', 'icono' => 'fas fa-dumbbell', 'color' => '#fd7e14'],
            ['nombre' => 'Aquagym', 'icono' => 'fas fa-swimmer', 'color' => '#0dcaf0'],
            ['nombre' => 'Yoga', 'icono' => 'fas fa-spa', 'color' => '#20c997'],
            ['nombre' => 'Talleres de Memoria', 'icono' => 'fas fa-lightbulb', 'color' => '#ffc107'],
            ['nombre' => 'Danza', 'icono' => 'fas fa-shoe-prints', 'color' => '#e83e8c'],
            ['nombre' => 'Manualidades / Talleres Artísticos', 'icono' => 'fas fa-paint-brush', 'color' => '#d63384'],
            ['nombre' => 'Cocina / Nutrición', 'icono' => 'fas fa-utensils', 'color' => '#28a745'],
            ['nombre' => 'Tecnología', 'icono' => 'fas fa-laptop-code', 'color' => '#007bff'],
            ['nombre' => 'Bienestar', 'icono' => 'fas fa-heartbeat', 'color' => '#6610f2'],
            ['nombre' => 'Recreación', 'icono' => 'fas fa-puzzle-piece', 'color' => '#ff9f1c'],
            ['nombre' => 'Cultura / Cine / Charlas', 'icono' => 'fas fa-theater-masks', 'color' => '#343a40'],
            ['nombre' => 'Deporte', 'icono' => 'fas fa-futbol', 'color' => '#198754'],
            ['nombre' => 'Musicoterapia', 'icono' => 'fas fa-music', 'color' => '#9c27b0'],
            ['nombre' => 'Idiomas', 'icono' => 'fas fa-language', 'color' => '#17a2b8'],
        ];

        foreach ($categorias as $categoria) {
            CategoriaActividad::firstOrCreate(
                ['nombre' => $categoria['nombre']],
                $categoria
            );
        }
    }
}
