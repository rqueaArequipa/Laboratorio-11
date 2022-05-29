<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class contactosFactory extends Factory
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
            'nombre' => $this->faker->name(),
            'correo' => $this->faker->unique()->safeEmail(),
            'tema' => $this->faker->text(),
            'mensaje' => $this->faker->text(),
        ];
    }
}
