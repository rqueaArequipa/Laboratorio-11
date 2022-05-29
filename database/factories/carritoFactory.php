<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class carritoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //

            'nombre_articulo' => $this->faker->text(),
            'precio' => $this->faker->randomFloat(),
            'comportamiento' => $this->faker->text(),
            'estado' => $this->faker->text(),
            'cantidad' => $this->faker->biasedNumberBetween(),
        ];
    }
}
