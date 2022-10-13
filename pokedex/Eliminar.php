<?php
if (!isset($_GET["id"])) {
    exit("No hay id");
}
$mysqli = include_once "bd.php";
$id = $_GET["id"];
$sentencia = $mysqli->prepare("DELETE FROM pokedex WHERE id = ?");
$sentencia->bind_param("i", $id);
$sentencia->execute();
header("Location: Listado.php");
?>