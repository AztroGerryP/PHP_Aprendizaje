<?php

// para ser extricto
declare(string_types=1);

// estas declaraciones son de tipo coercitivo y estricto php7.
// el argumento si o si debe ser entero
// '3' -> convierte a un numero 

function cuadrado(int $numero){
    return $numero * $numero;
}

//$numero = 'Gerardo';
$numero = 23;

echo "El cuadrado de ", $numero , " es " , cuadrado($numero);

