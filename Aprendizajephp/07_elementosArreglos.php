<?php

$meses = array(
    'Enero', 'Febrero', 'Marzo', 'Abril',
    'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre',
    'Octubre', 'Noviembre', 'Diciembre'
);

// a veces no se ven pero si las puedes contar
echo count($meses);
echo '<br />';

// acceder al ultimo mes
$ultimo_mes = count($meses) - 1 ;

echo '<br />';

// se accede de forma dinamica
echo $meses[$ultimo_mes] , ' <br />';
echo $ultimo_mes;



?>