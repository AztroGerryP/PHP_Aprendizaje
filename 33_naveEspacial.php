<?php

// Programacion de tus propios algoritmos de comparacion 

// Regresa 1 si el valor de la izquierda es mayor que el de la derecha
// Regresa 0 si los valores de ambos lados son iguales
// Regresa -1 si el valor de la derecha es mayor que el de la izquierda

// 1   0   -1

// Si uno es mayor o igual o menor
echo 10 <=> 1;
echo "<br/>";

echo 10 <=> 10;
echo "<br/>";

echo 1 <=> 10;
echo "<br/>";

// organiza con el guion dentro del numero 
$arreglo = [3,1,4,5,7,8,9];

// orderar de forma numerica
sort($arreglo);
echo implode(' - ', $arreglo);
echo "<br/>";


$arreglo2 = [3,1,4,5,7,8,9];
// funcion para ordenar los datos 
// function comparar($a, $b){
//     if($a == $b){
//         return 0;
//     }elseif($a > $b){
//         return 1;
//     }else{
//         return -1;
//     }
// }

// es lo mismo que esta en la parte de arriba ya que esta es la forma de 
// simplificar el codigo

function comparar($a, $b){
    return $a <=> $b;
}

usort($arreglo2, 'comparar');

echo implode(' - ', $arreglo2);