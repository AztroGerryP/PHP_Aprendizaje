<?php

$meses = array(
    'Enero', 'Febrero', 'Marzo', 'Abril',
    'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre',
    'Octubre', 'Noviembre', 'Diciembre'
);

// ordenar los meses alfabeticamente
sort($meses);

$numeros = array(1, 15, 8, 5, 18, 100, 56);

// a la inversa 
rsort($numeros)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meses del ano</title>
</head>
<body>
    
    <h1>MESES DEL ANO</h1>
    <ul>
        <?php
        //Por cada elemento de la lista ejecuta
        foreach($meses as $mes) {
            // Ejecutar
            echo '<li>', $mes , '</li>';
        };

        ?>
    </ul>
    <h1>NUMEROS ORDENADOS</h1>
    <ul>
        <?php
        //Por cada elemento de la lista ejecuta
        foreach($numeros as $numero) {
            // Ejecutar
            echo '<li>', $numero , '</li>';
        };

        ?>
    </ul>
</body>
</html>