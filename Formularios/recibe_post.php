<?php

 // recibir los datos por el metodo post creando un arreglo
 //print_r($_POST);

if(!$_POST){
    // abrir una pagina o redireccionar
    header('Location: http://localhost:90/CursoPhp/PHP_Aprendizaje/Formularios/');
}

// guardar los datos en una basedatos       
$nombre = $_POST['nombre'];
$sexo = $_POST['sex'];
$year = $_POST['anio'];
$terminos = $_POST['terminos'];

echo "Hola," . $nombre . " eres " . $sexo ;

// este metodo lo manda por atras del formulario
// es una informacion sencible
?>