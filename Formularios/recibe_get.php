<?php

// recibir la informacion por url
// usuario podria modificar manualmente y se usa mas por enlaces
// traer informacion y mostrarla
//print_r($_GET);

if (!$_GET) {
    header('Location: http://localhost:90/CursoPhp/PHP_Aprendizaje/Formularios/');
}

$nombre = $_GET['nombre'];
$sexo = $_GET['sex'];
$year = $_GET['anio'];
$terminos = $_GET['terminos'];


// permite al usuario editar y agregar codigo de html
// evitar que inyecten codigo
echo $nombre . "<br/>";
echo $sexo . "<br/>";
echo $year . "<br/>";
echo $terminos . "<br/>";
?>