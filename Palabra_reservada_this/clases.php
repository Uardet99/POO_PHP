<?php

class Persona {

    public $nombre;
    public $edad;
    public $pais;

    public function mostrarInformacion () {
        echo 'Hola Mundo';
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





