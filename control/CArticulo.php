<?php
/* =====================================
         CONTROL ARTÍCULO
====================================== */

// CLASES REQUERIDAS
require_once('modelo/MArticulo.php');

// CLASE CONTROL
class CArticulo
{
   public function index($criterio)
   {
      $articulos = MArticulo::all($criterio);
      include_once('vista/gestion/articulo/VindexArticulo.php');
   }

   public function create()
   {
      $categorias = MCategoria::all();
      include_once('vista/gestion/articulo/VcreateArticulo.php');
   }

   public function store($datos)
   {
      $articulo = new MArticulo();
      $articulo->codigo = $datos['tbCodigo'];
      $articulo->nombre = $datos['tbNombre'];
      $articulo->idCategoria = $datos['cbCategoria'];
      $articulo->stock = $datos['tbStock'];

      // SE RECUPERA EL NOMBRE DE LA IMAGEN ANTERIOR
      $nombreImgAnterior = $articulo->foto;
      // SE RECUPERA LA EXTENSIÓN DE LA NUEVA IMAGEN
      $extension = pathinfo($_FILES['fFoto']['name'], PATHINFO_EXTENSION);
      // SE PREPARA EL NOMBRE DEL ARTÍCULO
      $nombreArticulo = str_replace(' ', '_', $datos['tbNombre']);
      // SE DEFINE EL NUEVO NOMBRE DE LA IMAGEN
      $nombreImg = $articulo->codigo . '_' . $nombreArticulo . '.' . $extension;
      // SE DEFINE EL DESTINO DONDE SE GUARDARÁ LA IMAGEN
      $destino = $_SERVER['DOCUMENT_ROOT'] . '/EMPRESA/Proyectos/aro_pry-03-03_arosystems/aro_course-04_desarrollo-web_eje-02-01_crud-categorizado_implementation/vista/public/img/articulos/';
      // SE ELIMINA LA IMAGEN ANTERIOR
      if ($nombreImgAnterior && file_exists($destino . $nombreImgAnterior)) {
         unlink($destino . $nombreImgAnterior);
      }
      // SE MUEVE LA NUEVA IMAGEN DE TMP AL DESTINO
      move_uploaded_file(
         $_FILES['fFoto']['tmp_name'],
         $destino . $nombreImg
      );
      // SE GUARDA EL NOMBRE DE LA FOTO EN LA BD
      $articulo->foto = $nombreImg;

      $articulo->estado = 1;
      $articulo->save();
      header('Location:./?control=CArticulo&accion=index');
   }

   public function edit($id)
   {
      $articulo = MArticulo::find($id);
      $categorias = MCategoria::all();
      include_once('vista/gestion/articulo/VEditArticulo.php');
   }

   public function update($datos, $id)
   {
      $articulo = MArticulo::find($id);

      $articulo->codigo = $datos['tbCodigo'];
      $articulo->nombre = $datos['tbNombre'];
      $articulo->idCategoria = $datos['cbCategoria'];
      $articulo->stock = $datos['tbStock'];

      if ($_FILES['fFoto']['name']) {
         // SE RECUPERA EL NOMBRE DE LA IMAGEN ANTERIOR
         $nombreImgAnterior = $articulo->foto;
         // SE RECUPERA LA EXTENSIÓN DE LA NUEVA IMAGEN
         $extension = pathinfo($_FILES['fFoto']['name'], PATHINFO_EXTENSION);
         // SE PREPARA EL NOMBRE DEL ARTÍCULO
         $nombreArticulo = str_replace(' ', '_', $datos['tbNombre']);
         // SE DEFINE EL NUEVO NOMBRE DE LA IMAGEN
         $nombreImg = $articulo->codigo . '_' . $nombreArticulo . '.' . $extension;
         // SE DEFINE EL DESTINO DONDE SE GUARDARÁ LA IMAGEN         
         $destino = $_SERVER['DOCUMENT_ROOT'] . '/EMPRESA/Proyectos/aro_pry-03-03_arosystems/aro_course-04_desarrollo-web_eje-02-01_crud-categorizado_implementation/vista/public/img/articulos/';
         // SE ELIMINA LA IMAGEN ANTERIOR
         if ($nombreImgAnterior && file_exists($destino . $nombreImgAnterior)) {
            unlink($destino . $nombreImgAnterior);
         }
         // SE MUEVE LA NUEVA IMAGEN DE TMP AL DESTINO
         move_uploaded_file(
            $_FILES['fFoto']['tmp_name'],
            $destino . $nombreImg
         );
         // SE GUARDA EL NOMBRE DE LA FOTO EN LA BD
         $articulo->foto = $nombreImg;
      }

      $articulo->estado = 1;
      $articulo->update($id);

      header('Location:./?control=CArticulo&accion=index');
   }

   public function destroy($id)
   {
      $articulo = MArticulo::find($id);
      $articulo->estado = 0;
      $articulo->delete($id);
      header('Location:./?control=CArticulo&accion=index');
   }
}
