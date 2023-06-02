<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PedidoController;
use App\Http\Controllers\API\DetallePedidoController;
use App\Http\Controllers\API\SucursalController;
use App\Http\Controllers\API\TerceroController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::prefix('pedidos')->group(function () {
    Route::get('/',[ PedidoController::class, 'getAll']);
    Route::post('/crear',[ PedidoController::class, 'registrarPedido']);
});


Route::prefix('detallespedidos')->group(function () {
    Route::get('/',[ DetallePedidoController::class, 'getAll']);
});

Route::prefix('sucursales')->group(function () {
    Route::get('/',[ SucursalController::class, 'getAll']);
});

Route::prefix('terceros')->group(function () {
    Route::get('/',[ TerceroController::class, 'getAll']);
    Route::get('/crear',[ TerceroController::class, 'registrarTercero']);
});



Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
    Route::post('/registrarPedido', [PedidoController::class, 'registrarPedido']);
    Route::post('/registrarTercero', [TerceroController::class, 'registrarTercero']);
});
