<?php

namespace Database\Factories;

use App\Models\LineUp;
use Illuminate\Database\Eloquent\Factories\Factory;

class LineUpFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LineUp::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'artista' => $this->faker->word,
        'fecha' => $this->faker->word,
        'img' => $this->faker->word
        ];
    }
}
