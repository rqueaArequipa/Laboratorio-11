<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class detalle_facturaFactory extends Factory
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

            'nombre_usuario' => $this->faker->name(),
            'direccion' => $this->faker->text(),
            'codigo_postal' => $this->faker->postcode(),
            'pais' => $this->faker->country(),
            'ciudad' => $this->faker->city(),
        ];
    }
}
