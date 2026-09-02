<?php
/* =====================================
         CONTROL CATEGORIA
====================================== */

// CLASES REQUERIDAS
require_once('modelo/MCategoria.php');

// CLASE CONTROL
class CCategoria
{

   // METODO INDEX
   public function index()
   {
      $categorias = MCategoria::all();
      include_once('vista/gestion/categoria/VIndexCategoria.php');
   }

   public function search($criterio)
   {
      $categorias = MCategoria::search($criterio);
      include_once('vista/gestion/categoria/VIndexCategoria.php');
   }

   // METODO CREATE
   public function create()
   {
      include_once('vista/gestion/categoria/VCreateCategoria.php');
   }

   // METODO STORE
   public function store($datos)
   {
      $mCategoria = new MCategoria();
      $mCategoria->nombre = $datos['tbNombre'];
      $mCategoria->descripcion = $datos['tbDescripcion'];
      $mCategoria->ubicacion = $datos['tbUbicacion'];
      $mCategoria->estado = 1;
      $mCategoria->save();

      header('Location:./?control=CCategoria&accion=index');
   }

   public function edit($id)
   {
      $categoria = MCategoria::find($id);
      include_once('vista/gestion/categoria/VEditCategoria.php');
   }

   public function update($datos, $id)
   {
      $mCategoria = MCategoria::find($id);
      $mCategoria->nombre = $datos['tbNombre'];
      $mCategoria->descripcion = $datos['tbDescripcion'];
      $mCategoria->ubicacion = $datos['tbUbicacion'];
      $mCategoria->estado = 1;
      $mCategoria->update($id);
      header('Location:./?control=CCategoria&accion=index');
   }

   public function delete($id)
   {
      $mCategoria = MCategoria::find($id);
      $mCategoria->estado = 0;
      $mCategoria->delete($id);
      header('Location:./?control=CCategoria&accion=index');
   }
}
