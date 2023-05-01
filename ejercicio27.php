<?php //metodos estaticos

class Clase{

    public static function unMetodo(){
        echo "Esto es un metodo";
    }

}

$obj= new Clase;

$obj->unMetodo();

Clase::unMetodo(); // al ser estatico no necesito crear un objeto, solo necesitamso hacer referencia a una clase