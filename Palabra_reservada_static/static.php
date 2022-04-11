<?php

class Persona {
    public static $dia = '7 de septiembre';


    public static function saludo ($nombre = null) {
        if ($nombre) {
            return 'Hola, buenos dias ' . $nombre;
        } else {
            return 'Hola, buenos dias.';
        }
        
    }
}

/*  $carlos = new Persona;
 echo $carlos -> saludo('Carlos'); */

echo Persona::saludo();


