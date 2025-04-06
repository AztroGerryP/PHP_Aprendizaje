<?php

/* OPERADORES ARITMETICOS
+ Suma
- Resta
* Multiplicacion 
/ Division
% residuo de la division
------*/

$numero = 5;
$numero2 = 9;

$resultado = $numero + $numero2;
echo "El resultado de la suma es $resultado <br />";

$resultado = $numero - $numero2;
echo "El resultado de la resta es ", $resultado , " <br />";

$resultado = $numero * $numero2;
echo "El resultado de la multiplicacion es ", $resultado ,"<br />";

$resultado = $numero / $numero2;
echo "El resultado de la division es ", $resultado, "<br />";

$resultado = $numero % $numero2;
echo "El resultado de la residuo de la division es ", $resultado ,"<br />";

/* OPERADORES ASIGNACION
= Asignar valor
+= Suma
-= Resta
*= Multiplicacion 
/= Division
------*/

$numero3 = 4;
$resultado = $numero3 += 5;
echo "El resultado de sumar al $resultado <br/>";

$resultado = $numero3 -= 3;
echo "El resultado de sumar al $resultado <br/>";

$resultado = $numero3 *= 3;
echo "El resultado de sumar al $resultado <br/>";

$resultado = $numero3 /= 4;
echo "El resultado de sumar al $resultado <br/>";

$resultado = $numero3 %= 3;
echo "El resultado de sumar al $resultado <br/>";

/* OPERADORES COMPARACION
> MENOR QUE 
< MAYOR QUE
>= MENOR O IGUAL
>= MAYOR O IGUAL
== IGUAL QUE
!= DISNTINTO
=== identico en tipo y valor
!== diferente en tipo y valor
------*/

$numero5 = 7;
$numero4 = 6;

if($numero4 < $numero5){
    echo "El $numero4 es menor a $numero5 <br/>";
};

$mayor = $numero4 > $numero5;
echo "El $numero5 es mayor a $numero4 <br/>";

$menorIngual = $numero4 <= $numero5;
echo "El $numero4 es menor o igual a $numero5 <br/>";

$mayorIgual = $numero5 >= $numero4;
echo "El $numero4 es mayor o igual a $numero5 <br/>";

// estan mal por que no son iguales pero es simple representacion del signo
$igual = $numero4 == $numero5;
echo "El $numero4 es igual a $numero5 <br/>";

// estan mal por que no son iguales pero es simple representacion del signo
$menor = $numero4 != $numero5;
echo "El $numero4 es dintinto a $numero5 <br/>";

/* OPERADORES LOGICOS
and, &&
or, ||
xor
! NEGACION
------*/

$numero7 = 23;

if($numero7 >= 20 && $numero7 <30){
    echo "EJECUTA <br/>";
}

/* OPERADORES INCREMENTO / DECREMENTO
++$x
$x++
--$x
$x--
------*/

$numero8 = 3;

//incremento -> ciclos
$numero8++;
echo "El numero con incremento $numero8 <br/>";

//post-incremento
++$numero8;
echo "El numero con decremento $numero8 <br/>";

//decremento 
$numero8--;
echo "El numero con incremento $numero8 <br/>";

//post-decremento
--$numero8;
echo "El numero con decremento $numero8 <br/>";

/* OPERADORES DE CADENAS
. concatenar
.= agregar a un texto o sumarle
-----*/

$texto = 'hola';
$texto1 = " mundo";
$texto3 = $texto . $texto1;
echo $texto3 . "<br/>";

echo $texto .= $texto1;

?>