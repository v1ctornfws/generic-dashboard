<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre_empresa = $conexion->real_escape_string($_POST['nombre_empresa']);
    $nombre_contacto = $conexion->real_escape_string($_POST['nombre_contacto']);
    $correo = $conexion->real_escape_string($_POST['correo']);
    $descripcion = $conexion->real_escape_string($_POST['descripcion']);

    $sql = "INSERT INTO clientes (nombre_empresa, nombre_contacto, correo, direccion, descripcion)
            VALUES ('$nombre_empresa', '$nombre_contacto', '$correo', '$descripcion')";

    if ($conexion->query($sql) === TRUE) {
        header("Location: ../plantilla.php?pagina=usuarios&success=1");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
}

$conexion->close();
?>