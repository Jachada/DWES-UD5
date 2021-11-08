<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <?php
        $nombre = "Carmen Mª Rufo Palomo";
        $edad = 22;
        setcookie("Nombre", $nombre, time()+10800);
        setcookie("Edad", $edad, time()+10800);


    ?>
</body>
</html>