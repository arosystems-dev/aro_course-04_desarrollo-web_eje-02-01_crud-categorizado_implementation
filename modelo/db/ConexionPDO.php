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
    private static $db = "dbname=aro_pry-03-01_eje-02_crud-categorizado";
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
