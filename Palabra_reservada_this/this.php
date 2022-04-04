<?php

# Cuando trabajamos con clases es recomendable que pongamos la primera letra en mayuscula.
class Persona {
    public $nombre;
    public $edad;
    public $pais;

    # Mediante la palabra this podemos acceder a las propiedades de nuestra clase.
    public function mostrarInformacion() {
        echo $this->nombre . ' tiene ' . $this->edad . ' y es de ' . $this->pais . '<br />';
        
    }
}

$carlos = new Persona;
$carlos -> nombre = 'Carlos Arturo';
$carlos -> edad = 23;
$carlos -> pais = 'España';
$carlos -> mostrarInformacion();


$pepe = new Persona;
$pepe -> nombre = 'Pepe Juan';
$pepe -> edad = 28;
$pepe -> pais = 'Mexico';
$pepe -> mostrarInformacion();