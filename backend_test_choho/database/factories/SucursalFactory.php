<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Sucursal;

class SucursalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $sucursal = Sucursal::inRandomOrder()->take(2)->pluck('id_sucursal');

        return [
            'id_sucursal'=>null,
            'nit'=>str_replace('+','', $this->faker->unique()->e164PhoneNumber() ),
            'departamento'=>$this->faker->randomElement(['ANTIOQUIA', 'META', 'CUNDINAMARCA', 'BOYACA']),
            'ciudad'=>$this->faker->randomElement(['CHIA', 'TUNJA', 'BOGOTA', 'MEDELLIN','CALI','MUZO'])
        ];
    }

}
