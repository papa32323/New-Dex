<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

Route::get('/', function () {

    
    $respuesta = Http::get('https://pokeapi.co/api/v2/pokemon?limit=20');

    $data = $respuesta->json();

    
    $pokemones = $data['results']; 

   
    return view('welcome', compact('pokemones'));
});
