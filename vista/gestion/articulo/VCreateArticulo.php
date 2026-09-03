<!-- =====================================
            VISTA CREATE ARTICULO
====================================== -->

<h2> NUEVO ARTICULO</h2>
<br>
<form action="?control=CArticulo&accion=store" method="post" class="formControl" enctype="multipart/form-data">
   <!-- DATOS -->
   <div class="row">
      <div class="col col-lg-5 col-sm-10">
         <input type="text" id="tbCodigo" name="tbCodigo" placeholder="Codigo..." class="textBoxControl w-lg-10" required>
         <br>
         <input type="text" id="tbNombre" name="tbNombre" placeholder="Nombre..." class="textBoxControl w-lg-10" required>
         <br>
         <select name="cbCategoria" id="cbCategoria" class="cbControl">
            <?php
            foreach ($categorias as $c) {
               echo '<option value="' . $c['id'] . '">' . $c['nombre'] . '</option>';
            }
            ?>
         </select>
         <br>
         <input type="text" id="tbStock" name="tbStock" placeholder="Stock..." class="textBoxControl w-lg-10" required>
         <br>
      </div>
      <div class="col col-lg-4 col-sm-10 mL-lg-3 mL-sm-0">
         <input type="file" id="fFoto" name="fFoto" placeholder="Foto..." class="textBoxControl w-lg-10" required>
         <br>
         <img id="imgFoto" src="public/img/articulos/foto.png" alt="Foto" class="imgArticulo">
      </div>
   </div>
   <br>
   <!-- BOTON -->
   <div class="row">
      <input type="submit" value="Guardar" class="btnControl btnColorSave">
      <a href="?control=CArticulo&accion=index">
         <input type="button" value="Cancelar" class="btnControl btnColorCancel">
      </a>
   </div>

</form>
<script src="vista/public/js/scriptCargarFoto.js"></script>