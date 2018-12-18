<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<?php include "tabs.php"; ?>
<h2> 
<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php echo _t("_actualizaciones"); ?> 
<a type="button" class="btn btn-primary navbar-btn" href="?p=_actualizaciones&c=crear"> 
 <?php _t("Nuevo"); ?> 
</a>
</h2>

<table class="table table-striped"><?php $ganchos=array(); _actualizaciones_thead($ganchos); ?><tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "_actualizaciones", $_usuarios_grupo)){
             //   include "./_actualizaciones/vista/tr_buscar.php";
                
            }
   ?><?php
                $i = 1; // cuenta lineas
                while ($_actualizaciones = mysql_fetch_array($sql)) {

                    include "./_actualizaciones/reg/reg.php";

                    $campo_disponibles = _actualizaciones_campos_disponibles();

                    echo "<tr>";
                    include "./_actualizaciones/vista/tr.php";            
                    echo "</tr>";

                    $i++;
                }
                ?></tbody>
                    <?php
                  if(permisos_tiene_permiso("crear", "_actualizaciones", $_usuarios_grupo)){
                            //   include "./_actualizaciones/vista/tr_anadir.php";

                           }
                  ?>
                   <?php _actualizaciones_tfoot(); ?>

               </table> 

               <?php  
               //echo paginacion($p, $c, isset($_REQUEST['pag'])); 
               echo paginacion_master($p, $c, $total_items, $pag);
               ?>