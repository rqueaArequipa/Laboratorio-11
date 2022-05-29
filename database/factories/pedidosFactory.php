<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class pedidosFactory extends Factory
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

            'usuario_id' => $this->faker->biasedNumberBetween(),
            'provincia' => $this->faker->text(),
            'localidad' => $this->faker->locale(),
            'direccion' => $this->faker->text(),
            'coste' => $this->faker->randomFloat(),
            'estado' => $this->faker->text(),
            'fecha_pedido' => $this->faker->date(),
            'fecha_entrega' => $this->faker->date(),
        ];
    }
}
