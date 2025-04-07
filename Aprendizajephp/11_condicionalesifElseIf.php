<?php

$mes = 'Septiembre';
$verdadero = false;

// meses
if($mes == 'Septiembre'){
    echo 'Estas en mes patrio';
} else if ($mes == 'Diciembre'){
    echo 'Feliz navidad';
}else{
    echo 'Estas en otro mes';
}

// uso de negacion
if(!$verdadero){
    echo 'Verdadero';
}else{
    echo 'Falso';
}

?>