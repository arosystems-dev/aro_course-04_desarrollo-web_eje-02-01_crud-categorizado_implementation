<?php
/* =====================================
         CONTROL ARTICULO
====================================== */

// CLASES REQUERIDAS
class CPrincipal
{

   public function showVDashboard()
   {
      $categorias = MCategoria::all();
      $articulos = MArticulo::all('');
      $cantA = count($articulos);
      $cantC = count($categorias);
      include_once('vista/principal/VDashboard.php');
   }
}
