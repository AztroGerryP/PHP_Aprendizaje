<?php

$amigo = array('telefono' => 65262625, 'edad' => 20, 'pais' => 'mexico');

// extraer los elementos de un arreglo asociativo
echo extract($amigo);
echo $telefono; // se vuelven variables independientes
echo "<br/>";
echo $pais;
echo "<br/>";


$semana = array(
    'lunes', 'martes', 'miercoles', 'jueves',
    'viernes', 'sabado', 'domingo'
);


// extrar el ultimo elemento de la lista
$ultimo_elemento = array_pop($semana);

echo "<br/>";
foreach($semana as $dia){
    echo $dia . "<br/>";
}

$ultimo_elemento = array_pop($semana);
echo "El ultimo dia de semana es $ultimo_elemento";
echo "<br/>";

// Muestra los elementos por el simbolo que le pones
echo join(' - ', $semana);
echo "<br/>";

// Muestra cuantos elementos tiene 
echo count($semana);
echo "<br/>";

// muestra en orden asecente alfabetico
sort($semana);
echo join(', ', $semana);
echo "<br/>";

// muestra en desencente alfabetico
rsort($semana);
echo join(', ', $semana);
echo "<br/>";

// valores al revez 
$semana_reverse = array_reverse($semana);
echo join(', ', $semana_reverse);
echo '<br />';

/*
Referecia de funciones para arreglos 
http://php.net/manual/es/ref.array.php
*/

?>