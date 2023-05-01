<?php

$server="localhost"; // 127.0.0.1
$usuario="root";
$contraseña="";

try {
    $conexion=new PDO("mysql:host=$server;dbname=album", $usuario,$contraseña);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
    echo "Conexión establecida";
} catch (PDOException $error) {
    echo "Conexión erronea".$error;
}

?>