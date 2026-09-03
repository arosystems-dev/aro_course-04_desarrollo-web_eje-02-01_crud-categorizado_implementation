<?php
/* =====================================
         CONTROL REPORTE
====================================== */

// CLASES REQUERIDAS
require_once('modelo/MArticulo.php');

// CLASE CONTROL
class CReporte
{

   public function reporteStock()
   {
      $articulos = MArticulo::all('');
      header('Location:./vista/reporte/VReporte.php/?articulos=' . serialize($articulos));
   }
}
