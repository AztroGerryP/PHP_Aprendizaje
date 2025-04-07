<?php

// arreglo multidimensional tablas
$amigos = array(
    array('Juan', 30, array('asd', array())),
    array('Luis', 29),
    array('Pedro', 42)
);

// acceder a los valores 
echo $amigos[0][0] , '<br />';
echo $amigos[1][0] , '<br />';
echo $amigos[2][0] , '<br />';

?>