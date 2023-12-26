<?php

// Documentación: https://pokeapi.co/docs/v2#pokemon-section

// Nombre del pokemon
$nombre_pokemon = "magikarp";

$url = "https://pokeapi.co/api/v2/pokemon/" . $nombre_pokemon;

// Inicializa cURL
$ch = curl_init();

// Configurar las opciones cURL
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Ejecutr la solicitud y almacenar la respuesta
$response = curl_exec($ch);

// Cerramos la conexion
curl_close($ch);

//echo $response;

$poke_data = json_decode($response, true);

//echo "<pre>";
//print_r( $poke_data);
//echo "</pre>";

echo $poke_data["name"];
echo "<br>";
echo $poke_data["height"];
echo "<br>";
echo "<img src='" . $poke_data['sprites']['front_default'] . "'>";