<?php
class Conexion {
    public static function conectar() {
        // Datos exactos de InfinityFree
        $host = "sql303.infinityfree.com";
        $puerto = 3306;
        $bd = "if0_42359981_db_sabore";
        $usuario = "if0_42359981";
        $clave = "Antonella1104R"; // Pon aquí tu contraseña real

        // Conectamos forzando el modo correcto
        $conn = new mysqli($host, $usuario, $clave, $bd, $puerto);

        if ($conn->connect_error) {
            die("❌ Error: " . $conn->connect_error);
        }

        $conn->set_charset("utf8mb4");
        return $conn;
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
