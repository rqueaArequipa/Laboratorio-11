<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class nosotrosFactory extends Factory
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
            'apellido' => $this->faker->lastName(),
            'cargo' => $this->faker->text(),
        ];
    }
}
