<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Pedido extends Model
{
    use HasFactory;

    protected $table = "pedidos";

    protected $fillable = [
      'id',
      'fecha_pedido',
      'perfil',
      'num_pedido',
      'nit',
      'razon_social',
      'vendedor',
      'departamento',
      'ciudad'
    ];
}
