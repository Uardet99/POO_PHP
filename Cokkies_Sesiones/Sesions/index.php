<?php

session_start(); // Crea una sesion o reanuda la actual basada en un identificador de sesion pasad mediante una peticio GET o POST
$_SESSION['nombre'] = 'Carlos';





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesions</title>
</head>
<body>
    <h1>Pagina de Inicio</h1>
    <p></p>
    <a href="pagina2.php">Ir a la pagina 2</a>
</body>
</html>