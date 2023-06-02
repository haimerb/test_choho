<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

Use App\Models\Sucursal;
Use Log;


class SucursalController extends Controller
{
    public function getAll(){
        $data = Sucursal¿::get();
        return response()->json($data, 200);
      }

}
