<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/* 
php artisan make:factory CategoriaFactory
php artisan tinker
Categoria::factory()->count(10)->create()
exit
*/

class CategoriaFactory extends Factory
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
            'nombre' => $this->faker->word(1),
        ];
    }
}
