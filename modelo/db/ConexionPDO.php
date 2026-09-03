<?php
/* =====================================
    CONEXIÓN BASE-DATOS (PDO)
====================================== */

class ConexionPDO
{

    // ATRIBUTOS
    private static $servidor = "mysql:host=localhost";
    private static $user = "root";
    private static $password = "";
    private static $db = "dbname=aro_course-04_desarrollo-web_eje-02-01_crud-categorizado";
    private static $codificacion = "utf8mb4";


    // MÉTODOS
    public static function openConexion()
    {
        $conexion = new PDO(
            self::$servidor . ";" . self::$db . ";charset=" . self::$codificacion,
            self::$user,
            self::$password
        );

        return $conexion;
    }
}
