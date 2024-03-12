<?php
// routes/api.php
use App\Http\Controllers\PeliculaController;

Route::get('/peliculas', [PeliculaController::class, 'index']);
Route::get('/peliculas/{id}', [PeliculaController::class, 'show']);
Route::get('/sesiones/{id}', [PeliculaController::class, 'getSesiones']);
