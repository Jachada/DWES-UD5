<?php
$servidor = "localhost";
$baseDatos = "autentificacion";
$usuario = "developer";
$pass = "root";

function ComprobarUsuario($nombreUsuario) {
    try {
        $conn = new PDO("mysql:host=$GLOBALS[servidor];dbname=$GLOBALS[baseDatos]", $GLOBALS["usuario"], $GLOBALS["pass"]);
        $sql = $conn -> prepare("SELECT * FROM conexion WHERE NombreUsuario=?");
        $sql -> bindParam(1, $nombreUsuario);
        $sql -> execute();
        $retorno = $sql->fetch(PDO::FETCH_ASSOC);
        return $retorno;
    } catch (PDOException $e) { 
        return -1;
    }
    $conn=null;
} 
?>