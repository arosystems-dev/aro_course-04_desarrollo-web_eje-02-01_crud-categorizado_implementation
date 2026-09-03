<!-- =====================================
            VISTA EDIT ARTICULO
====================================== -->

<h2> EDIT ARTICULO</h2>
<br>
<form action="?control=CArticulo&accion=update&id=<?php echo $articulo->id ?>" method="post" class="formControl" enctype="multipart/form-data">
   <!-- DATOS -->
   <div class="row">
      <div class="col col-lg-5 col-sm-10">
         <input type="text" id="tbCodigo" name="tbCodigo" placeholder="Codigo..." class="textBoxControl w-lg-10" value="<?php echo $articulo->codigo ?>" required>
         <br>
         <input type="text" id="tbNombre" name="tbNombre" placeholder="Nombre..." class="textBoxControl w-lg-10" value="<?php echo $articulo->nombre; ?>" required>
         <br>
         <select name="cbCategoria" id="cbCategoria" class="cbControl">
            <?php
            foreach ($categorias as $c) {
               if ($articulo->idCategoria == $c['id']) {
                  echo '<option value="' . $c['id'] . '" selected>' . $c['nombre'] . '</option>';
               } else {
                  echo '<option value="' . $c['id'] . '">' . $c['nombre'] . '</option>';
               }
            }
            ?>
         </select>
         <br>
         <input type="text" id="tbStock" name="tbStock" placeholder="Stock..." class="textBoxControl w-lg-10" value="<?php echo $articulo->stock; ?>" required>
         <br>
      </div>
      <div class="col col-lg-5 col-sm-10 pL-lg-3 pL-sm-0">
         <input type="file" id="fFoto" name="fFoto" placeholder="Foto..." class="textBoxControl w-lg-10" value="<?php echo $articulo->foto; ?>">
         <br>
         <img id="imgFoto" src="vista/public/img/articulos/<?php echo $articulo->foto ?>" class="imgArticulo" alt="Foto">
      </div>
   </div>
   <br>
   <!-- BOTON -->
   <div class="row">
      <input type="submit" value="Actualizar" class="btnControl btnColorUpdate">
      <a href="?control=CArticulo&accion=index">
         <input type="button" value="Cancelar" class="btnControl btnColorCancel">
      </a>
   </div>
   <br>
   <div class="row jcRight w-lg-10 w-sm-10">
      <a href="?control=CArticulo&accion=destroy&id=<?php echo $articulo->id; ?>">
         <button type="button" class="btnControl btnColorDelete">Eliminar</button>
      </a>
   </div>

</form>
<script src="vista/public/js/scriptCargarFoto.js"></script>