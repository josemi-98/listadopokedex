<?php
function conectabd(){
$conexion = new PDO("mysql:host=localhost;dbname=pokedex", "root", "");
return $conexion;
}
?>