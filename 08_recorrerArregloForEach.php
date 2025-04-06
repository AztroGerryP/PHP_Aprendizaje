<?php

$meses = array(
    'Enero', 'Febrero', 'Marzo', 'Abril',
    'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre',
    'Octubre', 'Noviembre', 'Diciembre'
);

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
</body>
</html>