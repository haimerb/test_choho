<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Pedido;




class PedidoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Pedido::factory(10)->create();

       /* Pedido::create([
            'id'=>null,'fecha_pedido'=>'4/1/2023','prefijo'=>'CO','num_pedido'=>'123456','nit'=>'1111112111',
            'razon_social'=>'De Aqui SA','vendedor'=>'11111','departamento'=>'Valle del cauca',
            'ciudad'=>'Cali'
        ]);

        Pedido::create([
            'id'=>null,'fecha_pedido'=>'4/1/2023','prefijo'=>'CO','num_pedido'=>'123456','nit'=>'1111117111',
            'razon_social'=>'De Aqui SA','vendedor'=>'11111','departamento'=>'Valle del cauca',
            'ciudad'=>'Cali'
        ]);

        Pedido::create([
            'id'=>null,'fecha_pedido'=>'4/1/2023','prefijo'=>'CO','num_pedido'=>'123456','nit'=>'1111118111',
            'razon_social'=>'De Aqui SA','vendedor'=>'11111','departamento'=>'Valle del cauca',
            'ciudad'=>'Cali'
        ]);

        Pedido::create([
            'id'=>null,'fecha_pedido'=>'4/1/2023','prefijo'=>'CO','num_pedido'=>'123456','nit'=>'1111101111',
            'razon_social'=>'De Aqui SA','vendedor'=>'11111','departamento'=>'Valle del cauca',
            'ciudad'=>'Cali'
        ]);

        Pedido::create([
            'id'=>null,'fecha_pedido'=>'4/1/2023','prefijo'=>'CO','num_pedido'=>'12312456','nit'=>'1111112111',
            'razon_social'=>'De Aqui SA','vendedor'=>'11111','departamento'=>'Valle del cauca',
            'ciudad'=>'Bogota'
        ]);*/
    }
}
