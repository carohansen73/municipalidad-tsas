<?php

namespace Database\Factories;

use App\Models\BoletinOficial;
use Illuminate\Database\Eloquent\Factories\Factory;

class BoletinOficialFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BoletinOficial::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->word,
        'descripcion' => $this->faker->word,
        'titulo' => $this->faker->word,
        'tipo' => $this->faker->word,
        'anio' => $this->faker->randomDigitNotNull,
        'orden' => $this->faker->randomDigitNotNull,
        'publica' => $this->faker->word,
        'mes' => $this->faker->randomDigitNotNull
        ];
    }
}
