<?php

$identificador = 1;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://pokeapi.co/api/v2/pokemon/$identificador/");
//le pido que devuelva lo que obtuvo
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//almacenamos la respuesta
$res = curl_exec($ch);
//cerramos la instancia
curl_close($ch);
//Decodificamos la respuesta
$valores=json_decode($res,true);

echo "el nombre del pokemon es: ".$valores['name'];

