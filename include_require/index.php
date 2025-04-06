<?php

function suma($numero, $numero1){
    return $numero + $numero1;
}

// include agregar un archivo
include 'vista.php';

echo '<b> Hola </b>';

// require es obligatorio de poner el enlace
require 'vista.php';

?>


