<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CholloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'created_at' => $this->faker->unixTime(),
            'updated_at' => $this->faker->unixTime(),
            'titulo' => $this->faker->word(2),
            'descripcion' => $this->faker->text(150),
            'url' => $this->faker->url(),
            'categoria' => $this->faker->word(),
            // 'categoria_id' => $this->faker->numberBetween(1, 10),
            'puntuacion' => $this->faker->numberBetween(1, 10),
            'precio' => $this->faker->randomFloat(1, 1, 90),
            'precio_descuento' => $this->faker->randomFloat(1, 1, 90),
            'disponible' => $this->faker->boolean(),
            'user_id' => $this->faker->numberBetween(1, 10),        ];
    }
}
