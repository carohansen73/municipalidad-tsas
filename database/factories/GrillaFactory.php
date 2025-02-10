<?php

namespace Database\Factories;

use App\Models\Grilla;
use Illuminate\Database\Eloquent\Factories\Factory;

class GrillaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Grilla::class;

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
        'fecha' => $this->faker->word
        ];
    }
}
