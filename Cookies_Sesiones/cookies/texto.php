<?php

if (isset($_COOKIE['font-size'])) {
    $tamaño = $_COOKIE['font-size'];
} else {
    $tamaño = '15px';
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p {
            font-size: <?php echo $tamaño; ?>
        }
    </style>
</head>
<body>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis sit quidem minus 
    dignissimos consequatur quisquam modi error,
    ut odit fuga architecto libero dicta delectus similique. 
    Ipsum facilis exercitationem quasi harum!</p>
</body>
</html>