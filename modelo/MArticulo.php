<?php
/* =====================================
         MODELO ARTICULO
====================================== */

// CLASES REQUERIDAS
require_once('modelo/db/ConexionPDO.php');

// CLASE MODEL
class MArticulo
{
   // ATRIBUTOS
   public $id;
   public $codigo;
   public $nombre;
   public $idCategoria;
   public $stock;
   public $foto;
   public $estado;


   // OBTENER ARTÍCULOS
   public static function all($criterio)
   {
      $conexion = ConexionPDO::openConexion();
      $consulta = $conexion->prepare('
            SELECT a.id as id, a.codigo as codigo, a.nombre as nombre, c.nombre as categoria, a.foto as foto, a.stock as stock, a.estado as estado
            FROM articulo AS a INNER JOIN categoria AS c  ON c.id=a.idCategoria
            WHERE (a.estado=1) AND (a.codigo LIKE "%' . $criterio . '%" OR a.nombre LIKE "%' . $criterio . '%" OR c.nombre LIKE "%' . $criterio . '%") ORDER BY a.id DESC
         ');
      $consulta->execute();
      $articulos = $consulta->fetchAll();
      return $articulos;
   }

   // OBTENER ARTÍCULO
   public static function find($id)
   {
      $conexion = ConexionPDO::openConexion();
      $consulta = $conexion->prepare('SELECT * FROM articulo WHERE (estado=1) AND (id = ' . $id . ')');
      $consulta->execute();
      $fila = $consulta->fetch();
      // SE CREA EL OBJETO
      $articulo = new MArticulo();
      $articulo->id = $fila['id'];
      $articulo->codigo = $fila['codigo'];
      $articulo->nombre = $fila['nombre'];
      $articulo->idCategoria = $fila['idCategoria'];
      $articulo->stock = $fila['stock'];
      $articulo->foto = $fila['foto'];
      $articulo->estado = $fila['estado'];

      return $articulo;
   }

   // METODO SAVE
   public function save()
   {
      $conexion = ConexionPDO::openConexion();
      $consulta = $conexion->prepare('INSERT INTO articulo(codigo,nombre,idCategoria,stock,foto,estado) VALUES (?,?,?,?,?,?)');
      $consulta->execute(array($this->codigo, $this->nombre, $this->idCategoria, $this->stock, $this->foto, $this->estado));
   }

   // METODO UPDATE
   public function update($id)
   {
      $conexion = ConexionPDO::openConexion();
      $consulta = $conexion->prepare('UPDATE articulo SET codigo = ?, nombre = ?, idCategoria = ?, stock = ?, foto = ?, estado = ? WHERE id = ?');
      $consulta->execute(array($this->codigo, $this->nombre, $this->idCategoria, $this->stock, $this->foto, $this->estado, $id));
   }

   // METODO DELETE
   public function delete($id)
   {
      $conexion = ConexionPDO::openConexion();
      $consulta = $conexion->prepare('UPDATE articulo SET estado = ? WHERE id = ?');
      $consulta->execute(array($this->estado, $id));
   }
}
