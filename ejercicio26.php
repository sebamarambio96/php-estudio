<?php

class Persona
{
    public $nombre; //propiedades
    private $edad; //private solo puede ser usada por lo metodos o alteradas en la misma clase
    protected $altura; //solo se puede acceder desde la misma clase o de las clases heredadas

    function __construct($nombre){
        $this->nombre = $nombre;
    }
    public function imprimirNombre()
    { //acciones o metodos
        echo "Hola soy " . $this->nombre . "<br/>";
    }
    public function mostrarEdad()
    { //acciones o metodos
        $this->edad = 20;
        return $this->edad;
    }
}

$objAlumno2 = new Persona("Seba");

$objAlumno2->imprimirNombre();