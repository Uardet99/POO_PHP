<?php

///// CREANDO OBJETOS //////

// Ejemplo 1 de como hariamos una o varias personas sin Porgramacion Orientada a Objetos
# Persona 1
/* $nombre = 'Pepe';
$edad = 25;
$pais = 'España'; */

# Persona 2
/* $nombre_2 = 'Juan';
$edad_2 = 50;
$pais_2 = 'Mexico';

echo $nombre; */

// Ejemplo 2
# Ahora vamos a crear una plantilla/clase de una persona con las propiedades que queremos que tenga
class Persona {

    #Propiedades de una persona
    public $nombre;
    public $edad;
    public $pais;

    # Metodos de una clase
    public function mostrarInformacion () {
        echo 'Hola Mundo';
    }

}
//ola

// PERSONA 1
# Aqui estamos creando un objeto de tipo de persona, es decir, contendra las propiedades que ya contenia Persona
$carlos = new Persona;

# Ahora vamos a editar las propiedades
$carlos -> nombre = 'Carlos Arturo';
$carlos -> edad = 23;
$carlos -> pais = 'España';

// PERSONA 2
# Creamos el objeto (Pepe) de tipo Persona adquiriendo sus propiedades
$pepe = new Persona;

# Ahora editamos los valores de las propiedades sin interferir en el objeto anterio (Carlos)
$pepe -> nombre = 'Pepe Juan';
$pepe -> edad = 28;
$pepe -> pais = 'Mexico';


#Ahora mostraremos la informacion que contiene cada persona mediante una funcion que hemos creado dentro de la clase Persona

$carlos -> mostrarInformacion();