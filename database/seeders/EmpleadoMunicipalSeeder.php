<?php
namespace Database\Seeders;

use App\Models\EmpleadoMunicipal;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

/*Seeder para migrar empleados desde Excel (csv delimitado por comas)*/
class EmpleadoMunicipalSeeder extends Seeder
{

    public function run()
    {
        $area = 'hospital'; // cambiar según el archivo
        $file = Storage::path('PERSONAL-HOSPITAL.csv');

        if (!file_exists($file)) {
            $this->command->error('Archivo no encontrado');
            return;
        }

         $handle = fopen($file, 'r');

        // Leer encabezado
        $header = fgetcsv($handle, 0, ';');

        // Eliminar BOM UTF-8
        $header[0] = preg_replace('/^\xEF\xBB\xBF/', '', $header[0]);

        $header = array_map(fn($h) => strtolower(trim($h)), $header);

        while (($row = fgetcsv($handle, 0, ';')) !== false) {

            if (count($header) !== count($row)) {
                continue;
            }

            $data = array_combine($header, $row);

            if (empty($data['dni'])) {
                continue;
            }

            EmpleadoMunicipal::updateOrCreate(
                ['dni' => trim($data['dni'])],
                [
                     'legajo'   => $data['legajo'] ?: null,
                    //'nombre' => strtoupper(trim($data['nombre'])),
                    'nombre' => strtoupper(trim(
                        ($data['apellido'] ?? '') . ' ' . ($data['nombre'] ?? '')
                    )),
                    // 'genero'   => !empty($data['genero']) ? strtoupper($data['genero']) : null,
                     'telefono' => $data['telefono'] ?: null,
                     'email'    => $data['email'] ?: null,
                    'area'     => $area,
                ]
            );
        }

        fclose($handle);

        $this->command->info('Empleados importados correctamente.');

    }

}
