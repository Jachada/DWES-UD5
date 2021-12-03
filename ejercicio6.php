<?php
    include "ejercicio6BBDD.php";
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

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombreUsuario = $_POST["nombreUsuario"];
            $nombreUsuario = strip_tags($nombreUsuario);
            $nombreUsuario = stripslashes($nombreUsuario);
            $nombreUsuario = htmlspecialchars($nombreUsuario);

            $contrasenia = $_POST["contrasenia"];
            $contrasenia = strip_tags($contrasenia);
            $contrasenia = stripslashes($contrasenia);
            $contrasenia = htmlspecialchars($contrasenia);

            $usuario = ComprobarUsuario($nombreUsuario);
            
            if ($usuario) {
                $retorno = password_verify($contrasenia, $usuario["Contrasenia"]);
                if ($retorno) {
                    echo "Contraseña correcta";
                } else {
                    echo "Contraseña incorrecta";
                }
            } else {
                echo "El usuario es incorrecto";
            }
        }
        ?>
        <form class="form-register" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data">
            <h2 class="form-titulo">Registro al banco:</h2>
            <div class="contenedor-inputs">
                <input type="text" name="nombreUsuario" placeholder="Nombre Usuario" class="input-100" required>
                <input type="password" name="contrasenia" placeholder="Contraseña" class="input-100" required>
                <input type="submit" value="Registrar" class="btn-enviar">
            </div>
        </form>
    </body>
</html>