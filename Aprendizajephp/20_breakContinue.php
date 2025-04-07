<?php

$paises = array( 
    'Mexico', 'Espana', 'Venezuela', 'Colombia',
    'Peru', 'Argentina', 'Brasil', 'Guatemala'
);

foreach($paises as $pais){
    // va a continuar el codigo y se saltara 
    // en donde se cumpla la condicion
    if ($pais == 'Peru'){
        continue;
    }
    
    // terminara el ciclo
    if ($pais == 'Brasil'){
        break;
    }
    
    echo $pais . "<br/>";
}


?>