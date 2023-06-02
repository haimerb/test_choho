<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Pedido;
Use Log;

class PedidoController extends Controller
{
    public function getAll(){
        $data = Pedido::get();
        return response()->json($data, 200);
      }

     /**
     * Registrar pedido.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function registrarPedido(Request $request){

        $data['fecha_pedido']=$request['fecha_pedido'];
        $data['prefijo']=$request['prefijo'];
        $data['num_pedido']=$request['num_pedido'];
        $data['nit']=$request['nit'];
        $data['razon_social']=$request['razon_social'];
        $data['vendedor']=$request['vendedor'];
        $data['departamento']=$request['departamento'];
        $data['ciudad']=$request['ciudad'];

        $pedido = Pedido::create($data);
        return response()->json([
            'message' => "Pedido registrado correctamente",
            'success' => true,
            'pedido' => $pedido
        ], 200);
      }
}
