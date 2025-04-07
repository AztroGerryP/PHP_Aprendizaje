# PHP_Aprendizaje
AprendizajePHP

- En este curso primero se veran las bases de php para que despues se puedan realizar algunas actividades que sirven para poner 
en practica los conocimientos aprendidos en las primeras unidades


.htaccess -> se agrego este archivo para poder corregir el metodo post

<IfModule mod_rewrite.c> 
    <IfModule mod_negotiation.c> 
        Opciones -MultiViews -Índices 
    </IfModule> 

    Motor de Reescritura Activado 

    # Gestionar Encabezado de Autorización 
    RewriteCond %{HTTP:Authorization} . 
    RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}] 

    # Redirigir Barras Finales Si No Es Una Carpeta... 
    RewriteCond %{REQUEST_FILENAME} !-d 
    RewriteCond %{REQUEST_URI} (.+)/$ 
    RewriteRule ^ %1 [L,R=301] 

    # Gestionar Controlador Frontal... 
    RewriteCond %{REQUEST_FILENAME} !-d 
    RewriteCond %{REQUEST_FILENAME} !-f 
    RewriteRule ^ index.php [L] 
</IfModule>