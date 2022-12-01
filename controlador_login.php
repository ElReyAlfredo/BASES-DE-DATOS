<?php
session_start();
if (!empty($_POST["btningresar"])) {
    if (!empty($_POST["usuario"]) and !empty($_POST["password"])) {
        $usuario=$_POST["usuario"];
        $password=$_POST["password"];
        $sql=$conexion->query("select * from usuarios where Usuario='$usuario' and Constraseña='$password'");
        if ($datos=$sql->fetch_object()) {
            $_SESSION["id"]=$datos->ID;
            $_SESSION["nombre"]=$datos->Nombre;
            header("location: inicio.php");
        } else {
            echo "<div>Acceso denegado</div>";
        }
    } else {
        echo "Campos vacios";
    }
}

?>