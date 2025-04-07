<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creacion de un formulario dentro de html</title>
</head>
<body>
    
<!--
name -> conexion a php
action -> a donde se van a ir los datos
method -> metodo de envio por url
-->
    <form action="recibe.php" method="post">
        <input type="text" placeholder="Nombre:" name="nombre">
        <br>

        <label for="hombre">Hombre</label>
        <input type="radio" name="sexo" value='hombre' id='hombre'>
        <br>

        <label for="mujer">Mujer</label>
        <input type="radio" name="sexo" value='mujer' id='mujer'>
        <br>

        <select name="anio">
            <option value="2000">2000</option>
            <option value="2001">2001</option>
            <option value="2002">2002</option>
            <option value="2003">2003</option>
            <option value="2004">2004</option>
            <option value="2005">2005</option>
        </select>
        <br>
        <label for="terminos">Aceptar los terminos</label>
        <input type="checkbox" name="terminos" id="terminos" value="ok">

        <br>
        <input type="submit" value="Enviar">
    </form>

</body>
</html>