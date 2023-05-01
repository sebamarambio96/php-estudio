<?php

$server="localhost"; // 127.0.0.1
$usuario="root";
$contraseña="";

try {
    $conexion=new PDO("mysql:host=$server;dbname=album", $usuario,$contraseña);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);

    $sql="SELECT * FROM `personas`";

    $data=$conexion->prepare($sql);
    $data->execute();

    $resultado=$data->fetchAll();

    /* print_r($resultado); */

    foreach($resultado as $dato){
        $nombre=$dato["nombre"];
        echo $nombre."<br/>";
    }
    
    echo "Conexión establecida";
} catch (PDOException $error) {
    echo "Conexión erronea".$error;
}

?>