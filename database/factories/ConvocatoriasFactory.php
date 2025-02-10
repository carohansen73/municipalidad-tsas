<?php

namespace Database\Factories;

use App\Models\Convocatorias;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConvocatoriasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Convocatorias::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->word,
        'descripcion' => $this->faker->text,
        'telefono' => $this->faker->word,
        'email' => $this->faker->word,
        'img' => $this->faker->word
        ];
    }
}
