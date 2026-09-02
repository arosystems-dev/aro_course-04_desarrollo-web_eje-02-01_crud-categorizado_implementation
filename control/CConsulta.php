<?php
/* =====================================
         CONTROL CONSULTA
====================================== */
// CLASES REQUERIDAS
require_once('modelo/MArticulo.php');

// CLASE CONTROL
class CConsulta
{

   public function generarReporte()
   {
      $articulos = MArticulo::all('');
      header('Location:./vista/reporte/VReporte.php/?articulos=' . serialize($articulos));
   }
}
