<?php
/* =====================================
         CONTROL ARTICULO
====================================== */

// CLASES REQUERIDAS
class CPrincipal
{

   public function generarDashboard()
   {
      $categorias = MCategoria::all();
      $articulos = MArticulo::all('');
      $cantA = count($articulos);
      $cantC = count($categorias);
      include_once('vista/principal/VDashboard.php');
   }
}
