<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and assigned to the "api"
| middleware group. Make something great!
|
*/

// Ejemplo de ruta para obtener todas las películas
Route::get('/peliculas', [PeliculaController::class, 'index']);

// Ejemplo de ruta para obtener detalles de una película específica
Route::get('/peliculas/{id}', [PeliculaController::class, 'show']);

// Ejemplo de ruta para crear una nueva película
Route::post('/peliculas', [PeliculaController::class, 'store']);

// Ruta protegida para obtener información del usuario autenticado
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
