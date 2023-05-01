<?php

session_start();

if (isset($_SESSION["user"])) {//isset es para saber si esta vacio
    echo "Usuario: ".$_SESSION["user"]."<br/>"." Status: ".$_SESSION["status"];
} else {
    echo "No hay datos";
}



?>