<!-- =====================================
            VISTA CREATE CATEGORIA
====================================== -->
   
<h2> NUEVA CATEGORIA</h2>
<br>           
<form action="?control=CCategoria&accion=store" method="post" class="formControl">
   <!-- DATOS -->
   <div class="row">
      <div class="col col-lg-8 col-sm-10">
            <input type="text" id="tbNombre" name="tbNombre" placeholder="Nombre..." class="textBoxControl w-lg-10" required>
            <br>
            <input type="text" id="tbDescripcion" name="tbDescripcion" placeholder="Descripción..." class="textBoxControl w-lg-10">
            <br>
            <input type="text" id="tbUbicacion" name="tbUbicacion" placeholder="Ubicación..." class="textBoxControl w-lg-10" required>        
      </div>
   </div>        
   <br>
   <!-- BOTON -->
   <div class="row">      
         <input type="submit" value="Guardar" class="btnControl btnColorSave">      
         <input type="reset" value="Cancelar" class="btnControl btnColorCancel">      
   </div>  
   
</form>    
