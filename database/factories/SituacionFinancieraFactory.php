<?php

namespace Database\Factories;

use App\Models\SituacionFinanciera;
use Illuminate\Database\Eloquent\Factories\Factory;

class SituacionFinancieraFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SituacionFinanciera::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->word,
        'area' => $this->faker->word,
        'anio' => $this->faker->randomDigitNotNull,
        'periodo' => $this->faker->word,
        'titulo' => $this->faker->word
        ];
    }
}
