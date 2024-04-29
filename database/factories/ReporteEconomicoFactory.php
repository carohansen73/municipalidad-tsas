<?php

namespace Database\Factories;

use App\Models\ReporteEconomico;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReporteEconomicoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ReporteEconomico::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->text,
        'periodo' => $this->faker->randomDigitNotNull,
        'anio' => $this->faker->randomDigitNotNull,
        'sector' => $this->faker->word,
        'nombre_arch' => $this->faker->text,
        'descripcion' => $this->faker->text,
        'fecha' => $this->faker->word
        ];
    }
}
