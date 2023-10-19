<?php
$host = "localhost";
$usuario = "root";
$contrasena = "";
$base_de_datos = "mediz";

$Conexion = new mysqli($host, $usuario, $contrasena, $base_de_datos);

if ($Conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $Conexion->connect_error);
}
?>
