<?php
//*Conexion centralizada a la base de datos*//
//Todos los modelos utilizaran este archivo para acceder a MySQL.//

class Conexion {
    public static function conectar() {
        // Leemos los datos de Render automáticamente
        $servidor = getenv('DB_HOST') ?: 'localhost';
        $puerto   = getenv('DB_PORT') ?: '3306';
        $usuario  = getenv('DB_USER') ?: 'root';
        $clave    = getenv('DB_PASS') ?: '';
        $base     = getenv('DB_NAME') ?: 'db_sabore_restaurante';

        // Conectamos con los datos correctos
        $conexion = new mysqli($servidor, $usuario, $clave, $base, $puerto);

        if ($conexion->connect_error) {
            die("Error de conexión: " . $conexion->connect_error);
        }

        $conexion->set_charset("utf8mb4");
        return $conexion;
    }
}
?>

/*class Conexion
{
    public static function conectar()
    {
        $host = "localhost";
        $bd = "db_sabore_restaurante";
        $usuario = "root";
        $clave = "";

        $conn = new mysqli($host, $usuario, $clave, $bd);

        if ($conn->connect_error) {
            die("Error de conexion: " . $conn->connect_error);
        }

        return $conn;
    }
}*/
