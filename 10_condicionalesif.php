<?php

$edad = 18;
$nombre = 'Gerardo'

// Decisiones dentro de los programas a partir de variables
if($edad >= 18 && $nombre == 'Gerardo'){
    echo '<h1> El usuario puede entrar al antro </h1>';
}

if ($edad < 18 or $nombre != 'Gerardo'){
    echo ' <h1> Eres menor de edad y/o no te llamas Gerardo </h1>';
}

if ($edad < 18 xor $nombre != 'Gerardo'){
    echo ' <h1> Eres menor de edad y/o no te llamas Gerardo </h1>';
}

/*
OPERADORES 
> MENOR QUE 
< MAYOR QUE
>= MENOR O IGUAL
>= MAYOR O IGUAL
== IGUAL QUE
!= DISNTINTO
! Negacion
&& and
or ||
xor 
*/

?>
