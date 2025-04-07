<?php

$texto = '< > & "" ';

// convertir caracteres especiales en entidades html
// no se pueda inytectar codigo
echo htmlspecialchars($texto);
echo "<br />";

$texto2 = '   Hola como estas    ';

// trim elimina los espacios en blanco al incio y final
echo trim($texto2);
echo "<br />";

// saber el numero de caracteres
echo strlen($texto2);
echo "<br />";

// retornar un pedazo de la linea de texto
         // variable, posicionInical, posicionFinal
echo substr($texto2, 0, 5);
echo "<br />";

// pasar a mayusculas
echo strtoupper($texto2);
echo "<br />";

// pasar a minusculas 
echo strtolower($texto2);

// saber en que posicion se encuentra una letra
echo strpos($texto2, 'H');
echo "<br />";

/*
Revisar las funciones para cadenas 
http://php.net/manual/en/ref.strings.php
*/
?>