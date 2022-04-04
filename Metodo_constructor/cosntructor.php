<?php


class Persona {
    public $nombre;
    public $edad;
    public $pais;

    # Metodo constructor
    function __construct($nombre, $edad, $pais) {

        # Aqui estamos asignado a las variables la propiedades de la clase
        $this -> nombre = $nombre;
        $this -> edad = $edad;
        $this -> pais = $pais;
    }

    public function mostrarInformacion() {
        echo $this -> nombre . ' tiene ' . $this -> edad . ' años y es de ' . $this -> pais . '<br />';
        
    }
}

/// SIN CONSTRUCTOR ///
/* $carlos = new Persona;
$carlos -> nombre = 'Carlos Arturo';
$carlos -> edad = 23;
$carlos -> pais = 'España';
$carlos -> mostrarInformacion(); */

/// CON CONSTRUCTOR ///
$carlos = new Persona('Carlos Arturo', 23, 'Mexico');
$carlos -> mostrarInformacion();

$pepe = new Persona('Pepe Juan', 30, 'España');
$pepe -> mostrarInformacion(); 