<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Surcursla;

class SurcursalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $sucursal = Sucursal::inRandomOrder()->take(2)->pluck('id');

        return [
            'id'=>null,
            'fecha_pedido'=>now(),
            'prefijo'=>$this->faker->randomElement(['ARG', 'BR', 'CO', 'PE']),
            'num_pedido'=>str_replace('+','', $this->faker->unique()->e164PhoneNumber() ),
            'nit'=>str_replace('+','', $this->faker->unique()->e164PhoneNumber() ),
            'razon_social'=>$this->faker->name().' SA',
            'vendedor'=>$this->faker->name(). ' '.$this->faker->randomElement(['SA', 'LTDA', 'SAS']),
            'departamento'=>$this->faker->randomElement(['ANTIOQUIA', 'META', 'CUNDINAMARCA', 'BOYACA']),
            'ciudad'=>$this->faker->randomElement(['CHIA', 'TUNJA', 'BOGOTA', 'MEDELLIN','CALI','MUZO'])
        ];
    }
    }
}
