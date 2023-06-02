<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Sucursal;

class SucursalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Sucursal::factory(4)->create();
    }
}
