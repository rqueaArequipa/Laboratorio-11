<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\nosotros::factory(10)->create();
        \App\Models\usuarios::factory(10)->create();
        \App\Models\productos::factory(10)->create();
        \App\Models\pedidos::factory(10)->create();
        \App\Models\lineas_pedidos::factory(10)->create();
        \App\Models\detalle_factura::factory(10)->create();
        \App\Models\carrito::factory(10)->create();
        \App\Models\contactos::factory(10)->create();


    }
}
