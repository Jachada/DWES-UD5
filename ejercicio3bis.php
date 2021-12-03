<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
        session_start();
        echo $_SESSION["nombre"]." tiene ".$_SESSION["edad"]." años";
        echo "<br>";
        print_r($_SESSION);
        echo "<br>";
        unset($_SESSION["nombre"]);
        print_r($_SESSION);
        echo "<br>";
        session_unset();
        print_r($_SESSION);
        echo "<br>";
        session_destroy();
        print_r($_SESSION);

    ?>
</body>
</html>