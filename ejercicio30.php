<?php

//mantener información mientras el navegador este abierto
session_start();

$_SESSION["user"]="develoteca";
$_SESSION["status"]="logueado";

echo "Sesión iniciado"."<br/>";

echo "Usuario: ".$_SESSION["user"]."<br/>"." Status: ".$_SESSION["status"];

?>