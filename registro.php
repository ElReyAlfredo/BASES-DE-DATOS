<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include('db.php');

$nombre=$_POST['txtNombre'];
$usuario=$_POST['txtUsuario'];
$contraseña=$_POST['txtContraseña'];

$consulta="INSERT INTO `usuarios` (`Nombre`, `Usuario`, `Constraseña`) VALUES ('$nombre', '$usuario', '$contraseña');";

$resultado=mysqli_query($conexion,$consulta) or die("error de registro");


mysqli_close($conexion);

header("location: login.php");



?>