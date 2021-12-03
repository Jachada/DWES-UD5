<?php
    include "ejercicio5BBDD.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/botonera.css">
        <link rel="stylesheet" href="ejercicio.css">
        <title>Crea elemento</title>
    </head>
    <body>
        <?php
        $nombreUsuario = "";
        $contrasenia = "";
        $cuentaBancaria = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombreUsuario = $_POST["nombreUsuario"];
            $nombreUsuario = strip_tags($nombreUsuario);
            $nombreUsuario = stripslashes($nombreUsuario);
            $nombreUsuario = htmlspecialchars($nombreUsuario);

            $contrasenia = $_POST["contrasenia"];
            $contrasenia = strip_tags($contrasenia);
            $contrasenia = stripslashes($contrasenia);
            $contrasenia = htmlspecialchars($contrasenia);
            $contrasenia = password_hash($contrasenia,PASSWORD_DEFAULT);

            $cuentaBancaria = $_POST["cuentaBancaria"];
            $cuentaBancaria = strip_tags($cuentaBancaria);
            $cuentaBancaria = stripslashes($cuentaBancaria);
            $cuentaBancaria = htmlspecialchars($cuentaBancaria);

            $perfil = $_POST["perfil"];
            $perfil = strip_tags($perfil);
            $perfil = stripslashes($perfil);
            $perfil = htmlspecialchars($perfil);

            insertaElemento($nombreUsuario, $contrasenia, $cuentaBancaria, $perfil);
        }
        ?>
        <form class="form-register" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data">
            <h2 class="form-titulo">Registro al banco:</h2>
            <div class="contenedor-inputs">
                <input type="text" name="nombreUsuario" placeholder="Nombre Usuario" class="input-100" required>
                <input type="password" name="contrasenia" placeholder="Contraseña" class="input-100" required>
                <input type="text" name="cuentaBancaria" placeholder="Cuenta Bancaria" class="input-100" required>
                <input type="text" name="perfil" placeholder="Perfil (usuario / admin)" class="input-100" required>
                <input type="submit" value="Registrar" class="btn-enviar">
            </div>
        </form>
    </body>
</html>