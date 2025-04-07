<?php

// AMBITO DE LAS VARIABLES 
   // funcion no puede acceder a una variable que este fuera
   // no se puede acceder a una variable que esta dentro de ella

$numero = 7; // GLOBAL POR LO QUE DEBE SER PARAMETRO

function mostrarNumero($numero){
    echo $numero; 
}

mostrarNumero($numero);


function mostrarNumero1(){
    $numero1 = 13; // LOCAL no se puede acceder a ella 
    return $numero1;
}

echo mostrarNumero1();

?>
