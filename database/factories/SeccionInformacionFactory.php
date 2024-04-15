<?php

namespace Database\Factories;

use App\Models\SeccionInformacion;
use Illuminate\Database\Eloquent\Factories\Factory;

class SeccionInformacionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SeccionInformacion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'seccion_id' => $this->faker->randomDigitNotNull,
        'titulo' => $this->faker->word,
        'informacion' => $this->faker->text,

        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
