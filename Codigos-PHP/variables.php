/*
Para iniciar una web desde terminal asignamos el puerto con el que vamos a visualizar nuestro proyecto
php -S localhost:8888
*/  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>
    <h1><?php 
        $greeting = "Hello";
        echo $greeting .", Everybody!!";
        echo "$greeting Everybody!";
    ?></h1>
    
</body>
</html>