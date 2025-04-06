<?php

// VARIABLES
$nombre = 'Gerardo';
$numero = 7;
$numero_decimal = 3.45;
$bolean = true;
$bolean1 = false;
$sinValor;


echo 'Tu nombre es: ', $nombre , '<br/>';
echo 'Tu edad es: ' , $numero , '<br/>';
echo 'En tu cuenta tienes: ', $numero_decimal, '<br />';
echo 'De tipo boleano: ', $bolean , '<br/>';
echo 'De tipo boleano: ', $bolean1 , '<br/>';
echo 'Variable sin valor: ', $sinValor , '<br />';

// para concatenar variable y textos
// proplemas de seguridad
echo "Tu nombre es $nombre y tienes la edad de $numero <br/>" ;

// Saber el tipo de dato de una variable 
echo gettype($nombre)



# array: Arreglos
# Object: Objecto
# Class: Clase
# Null: Cuando una variable no se le asignado un valor

?>