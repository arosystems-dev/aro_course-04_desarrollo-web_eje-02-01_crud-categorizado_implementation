<?php
/* =====================================
         MODELO CATEGORIA
====================================== */

// CLASES REQUERIDAS
require_once('modelo/db/ConexionMYSQLI.php');
require_once('modelo/db/ConexionPDO.php');

// CLASE MODEL
class MCategoria
{
    // ATRIBUTOS
    public $idCategoria;
    public $nombre;
    public $descripcion;
    public $ubicacion;
    public $estado;

    // OBTENER TODAS LAS CATEGORIAS
    public static function all()
    {
        $conexion = ConexionPDO::openConexion();
        $consulta = $conexion->prepare('SELECT * FROM categoria WHERE estado=1 ORDER BY idCategoria DESC');
        $consulta->execute();
        $categorias = $consulta->fetchAll();
        return $categorias;
    }

    // OBTENER CATEGORIAS POR CRITERIO
    public static function search($criterio)
    {
        $conexion = ConexionPDO::openConexion();
        $consulta = $conexion->prepare('SELECT * FROM categoria WHERE ((nombre LIKE "%' . $criterio . '%") OR (ubicacion LIKE "%' . $criterio . '%")) AND (estado=1) ORDER BY idCategoria DESC');
        $consulta->execute();
        $categorias = $consulta->fetchAll();
        return $categorias;
    }

    // METODO OBTENER CATEGORIA
    public static function find($id)
    {
        $conexion = ConexionPDO::openConexion();
        $consulta = $conexion->prepare('SELECT * FROM categoria WHERE estado=1 AND idCategoria = ?');
        $consulta->execute(array($id));
        $fila = $consulta->fetch();
        // SE CREA EL OBJETO
        $categoria = new MCategoria();
        $categoria->idCategoria = $fila['idCategoria'];
        $categoria->nombre = $fila['nombre'];
        $categoria->descripcion = $fila['descripcion'];
        $categoria->ubicacion = $fila['ubicacion'];
        $categoria->estado = $fila['estado'];

        return $categoria;
    }

    // METODO SAVE
    public function save()
    {
        $conexion = ConexionPDO::openConexion();
        // $consulta = $conexion->prepare('INSERT INTO categoria (nombre,descripcion,ubicacion,estado) VALUES ("'.$this->nombre.'","'.$this->descripcion.'","'.$this->ubicacion.'","'.$this->estado.'")');
        $consulta = $conexion->prepare('INSERT INTO categoria(nombre,descripcion,ubicacion,estado) VALUES (?,?,?,?)');
        $consulta->execute(array($this->nombre, $this->descripcion, $this->ubicacion, $this->estado));
    }

    // METODO UPDATE
    public function update($id)
    {
        $conexion = ConexionPDO::openConexion();
        $consulta = $conexion->prepare('UPDATE categoria SET nombre = ?, descripcion = ?, ubicacion = ?, estado = ? WHERE idCategoria = ?');
        $consulta->execute(array($this->nombre, $this->descripcion, $this->ubicacion, $this->estado, $id));
    }

    // METODO DELETE
    public function delete($id)
    {
        $conexion = ConexionPDO::openConexion();
        $consulta = $conexion->prepare('UPDATE categoria SET estado = ? WHERE idCategoria = ?');
        $consulta->execute(array($this->estado, $id));
    }
}
