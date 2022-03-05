<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\ClienteController;


Route::get('/', function () {
    return view('welcome');
});


// ROUTES CLIENTE--
Route::get('/api/cliente', [ClienteController::class,'index']);
Route::get('/api/cliente/getCliente', [ClienteController::class,'getCliente']);
Route::post('/api/cliente/registrar', [ClienteController::class,'store']);
Route::put('/api/cliente/actualizar', [ClienteController::class,'update']);
Route::post('/api/cliente/eliminar', [ClienteController::class,'destroy']);
