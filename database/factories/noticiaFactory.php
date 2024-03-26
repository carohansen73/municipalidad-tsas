<?php

namespace Database\Factories;

use App\Models\noticia;
use Illuminate\Database\Eloquent\Factories\Factory;

class noticiaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = noticia::class;

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
        'fecha' => $this->faker->word,
        'categoria' => $this->faker->word,
        'publicada' => $this->faker->word,
        'destacada' => $this->faker->word,
        'pathname' => $this->faker->word,
        'usuario_id' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
