<?php
$conexion = mysqli_connect("localhost", "root", "usbw", "usuarios_db") or die("Problemas con la conexión");

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$carrera = $_POST['carrera'];
$contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);

mysqli_query($conexion, "INSERT INTO usuarios(nombre, correo, carrera, contrasena) VALUES ('$nombre', '$correo', '$carrera', '$contrasena')") or die("Problemas en el select" . mysqli_error($conexion));

mysqli_close($conexion);
echo "El usuario fue registrado exitosamente.";
?>
