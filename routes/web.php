<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

Route::get('/', function () {

    $respuesta = Http::get('https://pokeapi.co/api/v2/pokemon?limit=20');

    // Si la API falla, evita error 500
    if ($respuesta->failed()) {
        return "Error al obtener datos de la PokeAPI";
    }

    $data = $respuesta->json();

    // Si no existe "results", evitar error 500
    $pokemones = $data['results'] ?? [];

    return view('welcome', compact('pokemones'));
});
