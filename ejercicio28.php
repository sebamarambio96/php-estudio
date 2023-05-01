<?php

$server="localhost"; // 127.0.0.1
$usuario="root";
$contraseña="";

try {
    $conexion=new PDO("mysql:host=$server;dbname=album", $usuario,$contraseña);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);

    $sql="INSERT INTO `personas` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Jugando con la programación', 'foto.jpg');";

    $conexion->exec($sql);

    echo "Conexión establecida";
} catch (PDOException $error) {
    echo "Conexión erronea".$error;
}

?>