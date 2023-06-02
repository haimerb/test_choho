<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\DetallePedido;

class DetallePedidoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\DetallePedido::factory(10)->create();
    }
}
