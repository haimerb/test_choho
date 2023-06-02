<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

Use App\Models\DetallePedido;
Use Log;

class DetallePedidoController extends Controller
{
    public function getAll(){
        $data = DetallePedido::get();
        return response()->json($data, 200);
      }
}
