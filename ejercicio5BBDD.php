<?php
$servidor = "localhost";
$baseDatos = "autentificacion";
$usuario = "developer";
$pass = "root";

function insertaElemento($nombreUsuario, $contrasenia, $cuentaBancaria, $perfil) {
    try {
        $conn = new PDO("mysql:host=$GLOBALS[servidor];dbname=$GLOBALS[baseDatos]", $GLOBALS["usuario"], $GLOBALS["pass"]);
        $sql = $conn -> prepare("INSERT INTO conexion (NombreUsuario, Contrasenia, CuentaBancaria, Perfil) VALUES (?, ?, ?, ?)");
        $sql -> bindParam(1, $nombreUsuario);
        $sql -> bindParam(2, $contrasenia);
        $sql -> bindParam(3, $cuentaBancaria);
        $sql -> bindParam(4, $perfil);
        $sql -> execute();
        $last_id = $conn->lastInsertId();
        return $last_id;
    } catch (PDOException $e) { 
        return -1;
    }
    $conn=null;
} 
?>