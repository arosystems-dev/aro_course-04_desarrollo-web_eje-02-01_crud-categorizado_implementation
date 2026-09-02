<!-- =====================================
            VISTA EDIT CATEGORIA
====================================== -->

<h2> EDITAR CATEGORIA</h2>
<br>
<form action="?control=CCategoria&accion=update&id=<?php echo $categoria->idCategoria; ?>" method="post" class="formControl">
   <!-- DATOS -->
   <div class="row">
      <div class="col col-lg-8 col-sm-10">
         <input type="text" id="tbNombre" name="tbNombre" placeholder="Nombre..." value="<?php echo $categoria->nombre; ?>" class="textBoxControl w-lg-10" required>
         <br>
         <input type="text" id="tbDescripcion" name="tbDescripcion" placeholder="Descripción..." value="<?php echo $categoria->descripcion; ?>" class="textBoxControl w-lg-10">
         <br>
         <input type="text" id="tbUbicacion" name="tbUbicacion" placeholder="Ubicación..." value="<?php echo $categoria->ubicacion; ?>" class="textBoxControl w-lg-10" required>
      </div>
   </div>
   <br>
   <!-- BOTON -->
   <div class="row">
      <input type="submit" value="Actualizar" class="btnControl btnColorUpdate">
      <a href="?control=CCategoria&accion=index">
         <input type="button" value="Cancelar" class="btnControl btnColorCancel">
      </a>
   </div>
   <br>
   <div class="row jcRight w-lg-8 w-sm-10">
      <a href="?control=CCategoria&accion=delete&id=<?php echo $categoria->idCategoria; ?>"><button type="button" class="btnControl btnColorDelete">Eliminar</button></a>
   </div>

</form>