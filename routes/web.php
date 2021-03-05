<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SucursalesController;
use App\Http\Controllers\MecanicosController;
use App\Http\Controllers\ReservasController;


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

Route::get('/', function () {
    return view('welcome');
});


Route::post('/sucursales', [SucursalesController::class, 'store']);
Route::get('/sucursales', [SucursalesController::class, 'index']);

Route::post('/mecanicos', [MecanicosController::class, 'store']);

Route::post('/reservas', [ReservasController::class, 'store']);
