<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
</head>
<body>
    <div class="container">
        <div class="login-content">
            <form method="post" action="">
                <h2 class="title">BIENVENIDO</h2>
<?php
include "db.php";
include "controlador_login.php";
?>
                <div class="input-div one">
                    <div class="i">
</div>
                <div class="div">
                    <h5>Usuario</h5>
                <input id="usuario" type="text" class="input" name="usuario">
</div>
</div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
</div>
                <div class="div">
                    <h5>Contraseña</h5>
                    <input type="password" id="input" class="input" name="password">
</div>
</div>
                <div class="view">
                    <div class=" fas fa-eye verPassword" onclick="vista()" id="verPassword"></div>
</div>

                <div class="text-center">
                <a href="agregar.php">REGISTRARSE</a>
</div>                  
                <input name="btningresar" class="btn" type="submit" value="INICIAR SESION">
</form>
</div>
</div>

</body>
</html>