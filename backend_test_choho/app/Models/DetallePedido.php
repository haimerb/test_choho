<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetallePedido extends Model
{
    use HasFactory;

    protected $table = "detalle_pedido";

    protected $fillable = [
      'id',
      'prefijo',
      'num_pedido',
      'perfil',
      'familia',
      'grupo',
      'subgrupo',
      'id_producto',
      'descripcion',
      'subtotal',
      'iva',
      'total'
    ];
}
