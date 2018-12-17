<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<?php include "tabs.php"; ?>
<h2> 
<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php echo _t("cambio_claves"); ?> 
<a type="button" class="btn btn-primary navbar-btn" href="?p=cambio_claves&c=crear"> 
 <?php _t("Nuevo"); ?> 
</a>
</h2>

<table class="table table-striped"><?php cambio_claves_thead(); ?><tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "cambio_claves", $_usuarios_grupo)){
                include "./cambio_claves/vista/tr_buscar.php";
                
            }
   ?><?php
                $i = 1; // cuenta lineas
                while ($cambio_claves = mysql_fetch_array($sql)) {

                    include "./cambio_claves/reg/reg.php";

                    $campo_disponibles = cambio_claves_campos_disponibles();

                    echo "<tr>";
                    include "./cambio_claves/vista/tr.php";            
                    echo "</tr>";

                    $i++;
                }
                ?></tbody>
                    <?php
                  if(permisos_tiene_permiso("crear", "cambio_claves", $_usuarios_grupo)){
                            //   include "./cambio_claves/vista/tr_anadir.php";

                           }
                  ?>
                   <?php cambio_claves_tfoot(); ?>

               </table> 

               <?php  
               //echo paginacion($p, $c, isset($_REQUEST['pag'])); 
               echo paginacion_master($p, $c, $total_items, $pag);
               ?>