<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\DetallePedido;

class DetallePedidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $detallepedido = DetallePedido::inRandomOrder()->take(2)->pluck('id');

        return [
        'id'=>null,
        'prefijo'=>'CO',
        'num_pedido'=>str_replace('+','', $this->faker->unique()->e164PhoneNumber() ),
        'perfil'=>$this->faker->randomNumber(3, true),
        'familia'=>$this->faker->randomNumber(1, true),
        'grupo'=> $this->faker->randomNumber(3, true).'-'.$this->faker->randomNumber(3, true),
        'subgrupo'=> $this->faker->randomNumber(3, true).'-'.$this->faker->randomNumber(3, true).'-'.$this->faker->randomNumber(3, true),
        'id_producto'=>'',
        'descripcion'=>$this->faker->sentence,
        'subtotal'=>$this->faker->randomFloat(),
        'iva'=>$this->faker->randomFloat(),
        'total'=>$this->faker->randomFloat()
        ];
    }


}
