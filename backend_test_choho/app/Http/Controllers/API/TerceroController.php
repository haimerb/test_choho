<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

Use App\Models\Tercero;
Use Log;

class TerceroController extends Controller
{
    public function getAll(){
        $data = Tercero::get();
        return response()->json($data, 200);
      }

     /**
     * Registrar pedido.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function registrarTercero(Request $request){

        $data['nit']=$request['nit'];
        $data['razon_social']=$request['razon_social'];
        $data['ciiu']=$request['ciiu'];
        $data['activo']=$request['activo'];

        $tercero = Pedido::create($data);
        return response()->json([
            'message' => "Tercero registrado correctamente",
            'success' => true,
            'tercero' => $tercero
        ], 200);
      }
}
