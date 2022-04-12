<?php

session_start(); 

if ($_SESSION) {
    $nombre = $_SESSION['nombre'];
    echo "Hola, $nombre";
} else {
    echo "No has iniciado sesion";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 2</title>
</head>
<body>
    <a href="Cerrar.php">Cerrar Sesion</a>
</body>
</html>