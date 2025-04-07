<?php

$variable = 17;

echo 'soy un echo';
echo '<br />';

var_dump($variable);

// lo que abajo de la pagina no se va a mostrar
// si la ejecuccion muestra un problema
// die();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola mundo</h1>
    <?php
        die();
    ?>
</body>
</html>