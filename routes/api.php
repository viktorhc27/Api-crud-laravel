<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticuloController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/articulos', [ArticuloController::class,"index"]);//mostrar registros
Route::post('/articulos/create', [ArticuloController::class,"store"]);//registrar registros
Route::put('/articulos/update/{id}', [ArticuloController::class,"update"]);//actualizar registros
Route::delete('/articulos/delete/{id}', [ArticuloController::class,"destroy"]);//eliminar registros
