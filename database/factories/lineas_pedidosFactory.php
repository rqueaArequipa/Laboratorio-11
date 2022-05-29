<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class lineas_pedidosFactory extends Factory
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

            'numero_envio' => $this->faker->biasedNumberBetween(),
            'pedido' => $this->faker->biasedNumberBetween(),
            'producto' => $this->faker->text(),
            'unidades' => $this->faker->biasedNumberBetween(),
        ];
    }
}
