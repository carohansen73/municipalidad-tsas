<?php

namespace Database\Factories;

use App\Models\Archivos;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArchivosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Archivos::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->word,
        'nombre_agradable' => $this->faker->word,
        'seccion_id' => $this->faker->randomDigitNotNull,
        'sub_seccion' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
