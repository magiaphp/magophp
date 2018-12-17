<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<?php include "tabs.php"; ?>
<h2> 
<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php echo _t("actualizaciones"); ?> 
<a type="button" class="btn btn-primary navbar-btn" href="?p=actualizaciones&c=crear"> 
 <?php _t("Nuevo"); ?> 
</a>
</h2>

<table class="table table-striped"><?php actualizaciones_thead(); ?><tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "actualizaciones", $_usuarios_grupo)){
             //   include "./actualizaciones/vista/tr_buscar.php";
                
            }
   ?><?php
                $i = 1; // cuenta lineas
                while ($actualizaciones = mysql_fetch_array($sql)) {

                    include "./actualizaciones/reg/reg.php";

                    $campo_disponibles = actualizaciones_campos_disponibles();

                    echo "<tr>";
                    include "./actualizaciones/vista/tr.php";            
                    echo "</tr>";

                    $i++;
                }
                ?></tbody>
                    <?php
                  if(permisos_tiene_permiso("crear", "actualizaciones", $_usuarios_grupo)){
                            //   include "./actualizaciones/vista/tr_anadir.php";

                           }
                  ?>
                   <?php actualizaciones_tfoot(); ?>

               </table> 

               <?php  
               //echo paginacion($p, $c, isset($_REQUEST['pag'])); 
               echo paginacion_master($p, $c, $total_items, $pag);
               ?>