<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/botonera.css">
        <title>Usuario</title>
    </head>
    <body>
        <?php
            session_start();
            if ($_SESSION["perfil"] == "usuario") {
                echo "<h1>HOLA PRINGAO xD</h1>";
    
            } elseif ($_SESSION["perfil"] == "admin") {
                header("location: admin.php");

            } else {
                header("location: ejercicio7.php");
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

            }
        ?>
        <a href="cierraSesion.php">Cierra Sesion</a>
    </body>
</html>