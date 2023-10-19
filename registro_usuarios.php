<?php
// Inicia la sesión en PHP
session_start();

// Incluye el archivo de conexión con la base de datos
include('Conexion.php');

// Configura el documento para el tipo de datos que va a tratar
header('Content-Type: text/html; charset=UTF-8');

if (isset($_POST['btn_registro'])) {
    // Recoge los datos del formulario
    $email = $_POST['email'];
    $contraseña = $_POST['contrasena'];
    $documento = $_POST['documento'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $direccion = $_POST['direccion'];
    $Nacimiento = $_POST['Nacimiento'];
    $grupo_sanguineo = $_POST['grupo_sanguineo'];
    $tipo_de_sexo = $_POST['tipo_de_sexo'];
    $telefono = $_POST['telefono'];

    // Corrige el nombre de la columna Contraseña en la consulta SQL
    $insertar = "INSERT INTO registro(Documento, Nombres, Apellidos, direccion, Nacimiento, Sexo, Tipo_de_Sangre, Correo, Teléfono, Contrseña) VALUES ('$documento','$nombres','$apellidos','$direccion','$Nacimiento','$tipo_de_sexo','$grupo_sanguineo','$email','$telefono','$contraseña')";

    if (mysqli_query($Conexion, $insertar)) {
        echo "
            <script>
                alert('El usuario ha sido registrado con éxito');
                location.href='index.html';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('El usuario no ha sido registrado con éxito, por favor intentar de nuevo');
                location.href='index.html';
            </script>
        ";
    }
}

// Cierra la conexión a la base de datos
mysqli_close($Conexion);
?>