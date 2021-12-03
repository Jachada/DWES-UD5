<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Directiva</td>
            <td>Función</td>
            <td>Opciones</td>
        </tr>
        <tr>
            <td>session.use_cookies</td>
            <td>Especifica si el módulo usará cookies para almacenar el id de sesión en la parte del cliente.</td>
            <td><b>1</b> (Habilitado)<br><b>0</b> (Deshabilitado)</td>
        </tr>
        <tr>
            <td>session.use_only_cookies</td>
            <td>Especifica si el módulo sólo usará cookies para almacenar el id de sesión en la parte del cliente. Habilitar este ajuste previene ataques que implican pasar el id de sesión en la URL.</td>
            <td><b>1</b> (Habilitado)<br><b>0</b> (Deshabilitado)</td>
        </tr>
        <tr>
            <td>session.save_handler</td>
            <td>Define el nombre del gestor que se usa para almacenar y recuperar información asociada con una sesión.</td>
            <td>Por defecto <b>files</b>, pero se puede establecer otro con: <b>session_save_path('/home/example.com/sessions')</b></td>
        </tr>
        <tr>
            <td>session.name</td>
            <td>Especifica el nombre de la sesión que se usa como nombre de cookie.</td>
            <td>Por defecto es <b>PHPSESSID</b>, pero se puede establecer otro con: <b>session_name("NuevoNombreSesion")</b></td>
        </tr>
        <tr>
            <td>session.auto_start</td>
            <td>Especifica si el módulo de sesión inicia una sesión automáticamente cuando arranque una petición.</td>
            <td><b>1</b> (Habilitado)<br><b>0</b> (Deshabilitado)</td>
        </tr>
        <tr>
            <td>session.cookie_lifetime</td>
            <td>Especifica el tiempo de vida en segundos de la cookie que es enviada al navegador.</td>
            <td>Por defecto <b>0</b>, pero se puede establecer otro con: <b>session_set_cookie_params(600)</b></td>
        </tr>
        <tr>
            <td>session.gc_maxlifetime</td>
            <td>Especifica el número de segundos después de lo cual la información sea vista como 'basura' y potencialmente limpiada.</td>
            <td>Por defecto <b>1440</b>, pero depende de session.gc_probability y session.gc_divisor</td>
        </tr>
    </table>
</body>
</html>