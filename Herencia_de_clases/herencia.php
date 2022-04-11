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
        return $this -> nombre . ' tiene ' . $this -> edad . ' años y es de ' . $this -> pais . '<br />';
        
    }
}

# Utilizando la palabra extends y el nombre de la clase esatremos heredando las propiedades
class Estudiante extends Persona {
    
    function __construct($nombre, $edad, $pais, $carrera) {

        
        parent::__construct($nombre, $edad, $pais); # Esto sirve para no tener que poner lo mismo que hay en la clase Persona
        $this -> carrera = $carrera; # Añadimos una nueva propiedad de la clase Estudiante
    }
}

class Trabajador extends Persona {

    function __construct($nombre, $edad, $pais, $trabajo) {
        parent::__construct($nombre, $edad, $pais);
        $this -> trabajo = $trabajo;
    }
}

$carlos = new Trabajador('Carlos', 20, 'España', 'Profesor');
echo $carlos -> trabajo;

?>