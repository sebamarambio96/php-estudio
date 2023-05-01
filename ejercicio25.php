<?php

class Persona
{
    public $nombre; //propiedades
    private $edad; //private solo puede ser usada por lo metodos o alteradas en la misma clase
    protected $altura; //solo se puede acceder desde la misma clase o de las clases heredadas

    public function asignarNombre($nuevoNombre)
    { //acciones o metodos
        $this->nombre = $nuevoNombre;
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
class trabajador extends persona
{
    public $puesto;
    public  function presentacion(){
        echo "Hola soy " . $this->nombre . " y soy un ".$this->puesto;
    }
}


$objAlumno = new Persona(); //instancia
$objAlumno->asignarNombre("Oscar"); //llamando un metodo
$objAlumno->imprimirNombre("Oscar"); //llamando un metodo

$objAlumno2 = new Persona();
$objAlumno2->asignarNombre("Pedro");
$objAlumno2->imprimirNombre("Pedro");
echo $objAlumno2->mostrarEdad();

/* 
echo $objAlumno->nombre; // imprimir una propiedad
echo $objAlumno2->nombre; // imprimir una propiedad */

/* echo $objAlumno->edad;
echo $objAlumno->altura; */
$objTrabajador = new trabajador();
$objTrabajador->asignarNombre("Oscar");
$objTrabajador->puesto = "Profesor";
$objTrabajador->presentacion();
