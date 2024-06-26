<?php

namespace Database\Factories;

use App\Models\AvisoOficial;
use Illuminate\Database\Eloquent\Factories\Factory;

class AvisoOficialFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AvisoOficial::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->word,
        'nombre' => $this->faker->word,
        'descripcion' => $this->faker->word,
        'area' => $this->faker->word,
        'fecha' => $this->faker->word
        ];
    }
}
