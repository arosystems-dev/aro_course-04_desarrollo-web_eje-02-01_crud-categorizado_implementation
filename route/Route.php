<?php
/* =======================================
                ROUTES
======================================= */

// CLASES REQUERIDAS
require_once('control/CPrincipal.php');
require_once('control/CReporte.php');
require_once('control/CCategoria.php');
require_once('control/CArticulo.php');


// VARIABLES DE PETICION
$control = $_GET['control'] ?? 'CPrincipal';
$accion = $_GET['accion'] ?? 'dashboard';
$id = $_GET['id'] ?? null;
$criterio = $_POST['tbBuscar'] ?? '';

/*------------------------------------------
            RUTAS PRINCIPAL
------------------------------------------*/
if ($control == 'CPrincipal' && $accion == 'dashboard') {
   $cPrincipal = new CPrincipal();
   $cPrincipal->showVDashboard();
}

/*------------------------------------------
            RUTAS CATEGORIAS
------------------------------------------*/
if ($control == 'CCategoria' && $accion == 'index') {
   $cCategoria = new CCategoria();
   $cCategoria->index();
} else

if ($control == 'CCategoria' && $accion == 'search') {
   $cCategoria = new CCategoria();
   $cCategoria->search($criterio);
} else

if ($control == 'CCategoria' && $accion == 'create') {
   $cCategoria = new CCategoria();
   $cCategoria->create();
} else

if ($control == 'CCategoria' && $accion == 'store') {
   $cCategoria = new CCategoria();
   $cCategoria->store($_POST);
} else

if ($control == 'CCategoria' && $accion == 'edit' && $id) {
   $cCategoria = new CCategoria();
   $cCategoria->edit($id);
} else

if ($control == 'CCategoria' && $accion == 'update' && $id) {
   $cCategoria = new CCategoria();
   $cCategoria->update($_POST, $id);
} else

if ($control == 'CCategoria' && $accion == 'delete' && $id) {
   $cCategoria = new CCategoria();
   $cCategoria->delete($id);
}


/*------------------------------------------
            RUTAS ARTÍCULO
------------------------------------------*/
if ($control == 'CArticulo' && $accion == 'index') {
   $cArticulo = new CArticulo();
   $cArticulo->index($criterio);
} else

if ($control == 'CArticulo' && $accion == 'create') {
   $cArticulo = new CArticulo();
   $cArticulo->create();
} else

if ($control == 'CArticulo' && $accion == 'store') {
   $cArticulo = new CArticulo();
   $cArticulo->store($_POST);
} else

if ($control == 'CArticulo' && $accion == 'edit' && $id) {
   $cArticulo = new CArticulo();
   $cArticulo->edit($id);
} else

if ($control == 'CArticulo' && $accion == 'update' && $id) {
   $cArticulo = new CArticulo();
   $cArticulo->update($_POST, $id);
} else

if ($control == 'CArticulo' && $accion == 'destroy' && $id) {
   $cArticulo = new CArticulo();
   $cArticulo->destroy($id);
}

/*------------------------------------------
            RUTAS REPORTES
------------------------------------------*/
if ($control == 'CConsulta' && $accion == 'reporte') {
   $cConsulta = new CReporte();
   $cConsulta->reporteStock();
}
