<?php

// Calcular el area de un triangulo
function calcular_area_triagunlo($base, $altura){
    return ($base * $altura) / 2;
};

$area = calcular_area_triagunlo(10,10);
echo "El area del triangulo es $area metros cuadrados <br>";


?>