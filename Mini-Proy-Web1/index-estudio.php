<?php

/*
Esto me sirve para imprimir por pantalla informacion detallada del servidor en este caso. 
El <pre> es para ordenar lo que va a imprimir por pantalla, en este caso, los datos del servidor. 
echo "<pre>";
var_dump($_SERVER);
echo "</pre>";

die(); //para matar todo lo que viene a continuacion

Vamos a convertir esto en una funcion util para debuggear:

*/

function dd($value){
    echo "<pre>";
    var_dump($_SERVER);
    echo "</pre>";

    die();
}

dd($_SERVER);
/*
//Convertir los colores de los botones superiores.

if($_SERVER['REQUEST_URI'] === "/") {
    echo 'bg-gray-400 text-white';
} else {
    echo 'bg-gray-900';}
*/
// Otra forma de hacer un if
echo $_SERVER['REQUEST_URI'] === "/" ? 'bg-gray-400 text-white' : 'bg-gray-900'; // "?" es para generar el if, mientras que ":" es para decir que si no se cumple la condicion se haga aquello otro. 

$heading = "Home";

$business = [
    'name' => 'Laracast',
    'cost' => 15,
    'categories' => ["Testing", "PHP", "Javascript"]

];

//$business['name']; //Laracast
/*
if ($business['cost'] > 99) {
    echo "Not interested.";
}
*/
/*
foreach ($business['categories'] as $category) {
    echo $category . "<br>"; //"<br>" es para hacer un "break"
}
*/

function register($user) {
    // Crea el usuario y la base de datos
    // Log them in
    // Mensaje de bienvenida
    // Redirigir a una web
}

require "views/index.view.php";

