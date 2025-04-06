<?php

// acceder a los valores mediante cadenas o valores
$alex = array('telefono' => '65236573', 'edad' => 25, 'apellido' => 'garapino', 'pais' => 'usa');

echo $alex['telefono'], '<br />';

// modificando un valor 
$alex['telefono'] = '7637926398';

echo $alex['telefono'], '<br />';

?>