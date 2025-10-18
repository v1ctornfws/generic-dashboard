<?php
$host = "localhost";
$usuario = "root";
$pass = "";
$bd = "dashboard";

$conexion = new mysqli($host, $usuario, $pass, $bd);

if ($conexion->connect_error) {
    die("Conexión fallida >>> " . $conexion->connect_error);
}
?>