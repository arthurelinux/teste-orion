<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/clienteCadastro',[App\Http\Controllers\api\clinetesController::class,'store'])->name('clienteCadastro');

Route::get('/cliente/{id}',[App\Http\Controllers\api\clinetesController::class,'show'])->name('cliente');
Route::get('/consulta/final-placa/{numero}',[App\Http\Controllers\api\clinetesController::class,'showPlaca'])->name('cliente');


Route::delete('/cliente/{id}',[App\Http\Controllers\api\clinetesController::class,'destroy'])->name('clienteDelete');

Route::put('/cliente/{id}',[App\Http\Controllers\api\clinetesController::class,'update'])->name('clienteUpadate');