<?php

// isset return true/false si le han puesto valor
// valida si tiene un valor

$edad = 23;

// Operador tenario
$edad = (isset($edad)) ? $edad  : 'El usuario no agrega su edad';
echo $edad;


?>