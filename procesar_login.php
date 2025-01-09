<?php
$conexion = mysqli_connect("localhost", "root", "usbw", "usuarios_db") or die("Problemas con la conexión");

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$registros = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'") or die("Problemas en el select:" . mysqli_error($conexion));
if ($reg = mysqli_fetch_array($registros)) {
    if (password_verify($contrasena, $reg['contrasena'])) {
        echo "Bienvenido, " . htmlspecialchars($reg['nombre']) . "!";
    } else {
        echo "Contraseña incorrecta.";
    }
} else {
    echo "No existe un usuario con ese correo.";
}

mysqli_close($conexion);
?>
