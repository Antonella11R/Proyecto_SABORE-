<?php
/*Conexion centralizada a la base de datos*/
//Todos los modelos utilizaran este archivo para acceder a MySQL.

class Conexion {
    public static function conectar() {
        // Leemos datos de Render
        $host = getenv('DB_HOST');
        $puerto = getenv('DB_PORT') ?: '3306';
        $bd = getenv('DB_NAME');
        $usuario = getenv('DB_USER');
        $clave = getenv('DB_PASS');

        // Conexión MySQL (lo que ya usas)
        $conn = new mysqli($host, $usuario, $clave, $bd, $puerto);

        if ($conn->connect_error) {
            die("❌ Error de conexión: " . $conn->connect_error);
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
