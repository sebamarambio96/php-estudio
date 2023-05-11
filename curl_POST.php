<?php

$identificador = 1;
$ch = curl_init();
//array que mandaremos
$array=[
        "tittle"=> "producto prueba actualizado 3",
        "description"=> "Este es un producto prueba",
        "price"=> 300,
        "thumbnail"=> ["11asda12312.jpg"],
        "code"=> "ab1qw221asdasdfasdf21",
        "stock"=> 25,
];

$data = http_build_query($array);

curl_setopt($ch, CURLOPT_URL, "http://localhost:8080/api/products/");
//le digo el tipo de peticion
curl_setopt($ch, CURLOPT_POST, true);
//le entrego la data para que la mande
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
//le pido que devuelva la respuesta
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//almacenamos la respuesta
$res = curl_exec($ch);

if(curl_errno($ch)) echo curl_error($ch);
else $decoded=json_decode($res,true);

foreach($decoded as $index => $value){
echo "$index: $value";
}

//cerramos la instancia
curl_close($ch);
//Decodificamos la respuesta


