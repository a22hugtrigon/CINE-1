<?php
// app/Http/Controllers/PeliculaController.php
namespace App\Http\Controllers;

use App\Models\Pelicula;

class PeliculaController extends Controller
{
    public function index()
    {
        $peliculas = Pelicula::all();

        return response()->json($peliculas);
    }

    public function show($id)
    {
        $pelicula = Pelicula::find($id);

        return response()->json($pelicula);
    }

    // Agrega una función para obtener sesiones de una película
    public function getSesiones($id)
    {
        // Implementa la lógica para obtener sesiones según el ID de la película
        // Asegúrate de tener un modelo y tabla para las sesiones en tu base de datos
    }
}
