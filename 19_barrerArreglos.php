<?php

$meses = array(
    'Enero', 'Febrero', 'Marzo', 'Abril',
    'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre',
    'Octubre', 'Noviembre', 'Diciembre'
);

// recorriendo por el ciclo for
for($contador = 0; $contador < count($meses) ; $contador++){
    echo $meses[$contador] . "<br />";
}

echo "<br/>";
echo "<br/>";
echo "<br/>";

// recorrido por el metodo while
$conta = 0;

while($conta < count($meses)){
    echo $meses[$conta] . "<br />";
    $conta++;
}

?>