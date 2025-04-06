<?php


$meses = array(
    'Enero', 'Febrero', 'Marzo', 'Abril',
    'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre',
    'Octubre', 'Noviembre', 'Diciembre'
);

// Recorre arreglos para traer todos los valores 

$gerardo = array('telefono' => 67527638, 'edad' => 20,
      'pais' => 'Mexico');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Meses</h1>
    <ul>
        <?php

        foreach($meses as $mes){
            echo "<li> $mes </li>";
        }
        ?>
    </ul>
    <h1>Informacion</h1>
    <ul>
        <?php

        // $ valor funge como variable temporal
        foreach($gerardo as $data => $valor){
            echo "<li> $data : $valor </li>";
        }
        ?>
    </ul>
</body>
</html>