<!-- =====================================
            VISTA DASHBOARD
====================================== -->

<h2>STOCK DE ARTICULOS</h2>
<hr>

<!-- INPUT QUE RECIBE LOS DATOS -->
<input type="hidden" id="tbArticulos" value='<?php echo json_encode($articulos); ?>'>

<!-- DATOS ESTADISTICOS -->
<div class="row">
   <!-- TOTALES -->
   <div class="col textRight">No Categorias = <?php echo $cantC; ?></div>
   <div class="col textRight">No Articulos = <?php echo $cantA; ?></div>
   <!-- GRÁFICO DE BARRAS-->
   <div class="col">
      <canvas id="myChart" width="400" height="200"></canvas>
   </div>
</div>

<script src="vista/public/js/chart.js"></script>
<script src="vista/public/js/scriptDashboard.js">

</script>