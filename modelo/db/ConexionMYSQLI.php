<?php
/* =====================================
    CONEXIÓN BASE-DATOS (MYSQLI)
====================================== */

class ConexionMYSQLI
{

    // ATRITUBOS
    private static $servidor = "localhost";
    private static $user = "root";
    private static $password = "";
    private static $db = "aro_pry-03-01_eje-02_crud-categorizado";

    private static $conexion;

    // METODOS
    public static function openConexion()
    {
        self::$conexion = mysqli_connect(self::$servidor, self::$user, self::$password, self::$db);
        return self::$conexion;
    }
}
