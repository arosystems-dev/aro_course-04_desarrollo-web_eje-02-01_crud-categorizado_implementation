<!-- =====================================
         VISTA INDEX CATEGORIA
====================================== -->

<h2> GESTIONAR CATEGORIAS</h2>
<br>

<!-- SECTOR DE BUSQUEDA Y NUEVO REGISTRO -->
<div class="row">
   <div class="col-lg-10">
      <form action="?control=CCategoria&accion=search" method="POST" class="formControl">
         <div class="row">
            <input type="text" id="tbBuscar" name="tbBuscar" placeholder="Buscar..." class="textBoxControl w-lg-5">
            <input type="submit" value="Buscar" class="btnControl btnColorSave">
            <a href="?control=CCategoria&accion=create">
               <button class="btnControl btnColorNew col-lg-2" type="button">
                  Nuevo
               </button>
            </a>
         </div>
      </form>
   </div>
</div>
<br>

<!-- SECTOR DE DATOS -->
<div class="row">
   <div class="col-lg-10">
      <table>
         <thead>
            <th class="w-lg-1">ID</th>
            <th>NOMBRE</th>
            <th>UBICACION</th>
            <th>DESCRIPCION</th>
            <th>OPCIONES</th>
         </thead>
         <tbody>
            <?php
            foreach ($categorias as $c) {
               echo ('
                  <tr>
                     <td class="w-lg-1 textCenter">' . $c['idCategoria'] . '</td>
                     <td class="w-lg-2">' . $c['nombre'] . '</td>
                     <td class="w-lg-2">' . $c['ubicacion'] . '</td>
                     <td class="w-lg-3">' . $c['descripcion'] . '</td>
                     <td class="w-lg-2 textCenter">                        
                        <a href="?control=CCategoria&accion=edit&id=' . $c['idCategoria'] . '">
                           <button class="btnControl btnColorUpdate m-1">Editar</button>
                        </a>
                     </td>
                  </tr>
                 ');
            }
            ?>
         </tbody>
      </table>
   </div>
</div>