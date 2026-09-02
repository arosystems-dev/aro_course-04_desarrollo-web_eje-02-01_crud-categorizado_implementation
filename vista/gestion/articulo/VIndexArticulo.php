<!-- =====================================
            VISTA INDEX ARTICULO
====================================== -->

<h2> GESTIONAR ARTICULOS</h2>
<br>

<!-- SECTOR DE BUSQUEDA Y NUEVO REGISTRO -->
<div class="row">
   <div class="col-lg-10">
      <form action="?control=CArticulo&accion=index" method="POST" class="formControl">
         <div class="row">
            <input type="text" id="tbBuscar" name="tbBuscar" placeholder="Buscar..." class="textBoxControl w-lg-5">
            <input type="submit" value="Buscar" class="btnControl btnColorSave">
            <a href="?control=CArticulo&accion=create">
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
            <th class="w-lg-2">FOTO</th>
            <th class="w-lg-4">DATOS</th>
            <th class="w-lg-2">STOCK</th>
            <th class="w-lg-2">OPCIONES</th>
         </thead>
         <tbody>
            <?php
            foreach ($articulos as $a) {
               echo ('
                  <tr>                          
                     <td class="w-lg-2 textCenter">
                        <img class="img" src="vista/public/img/articulos/' . $a['foto'] . '">
                     </td>
                     <td class="w-lg-4">                        
                        <b>Codigo: </b>' . $a['codigo'] . '<br>
                        <b>Nombre: </b>' . $a['nombre'] . '<br>
                        <b>Categoria: </b>' . $a['categoria'] .
                  '</td>   
                     <td class="textCenter w-lg-2">' . $a['stock'] . '</td>
                     <td class="textCenter w-lg-2">                        
                        <a href="?control=CArticulo&accion=edit&id=' . $a['idArticulo'] . '">
                           <button class="btnControl btnColorUpdate">Editar</button>
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