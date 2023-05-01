<?php

$frutas=array("f"=>"fresa","p"=>"Pera", "m"=>"Manzana");

/* print_r($frutas); */

echo $frutas["m"]."<br/>";

foreach($frutas as $i=>&$valor){
    echo $frutas[$i]."<br/>";
}