<?php

namespace Database\Factories;

use App\Models\Evento;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Evento::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'seccion_id' => $this->faker->randomDigitNotNull,
        'img' => $this->faker->word,
        'vigente' => $this->faker->word,
        'fecha_inicio' => $this->faker->word,
        'fecha_fin' => $this->faker->word
        ];
    }
}
