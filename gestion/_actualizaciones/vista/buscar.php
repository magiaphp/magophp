<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<?php include "tabs.php"; ?>

<h2> 

<span class="glyphicon glyphicon-search"></span> 

<?php _t("Resultados de su busqueda en "); ?>

</h2>


<table class="table table-striped">
    <thead>
        <tr> 
<th><?php _t("Version"); ?></th> 
<th><?php _t("Requiere"); ?></th> 
<th><?php _t("Nombre"); ?></th> 
<th><?php _t("Descripcion"); ?></th> 
<th><?php _t("Ejecutar"); ?></th> 
<th><?php _t("Estatus"); ?></th> 
 <th><?php _t("Accion"); ?></th> 
 </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "_actualizaciones", $_usuarios_grupo)){
             //   include "./_actualizaciones/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        $i = 1;
        while ($_actualizaciones = mysql_fetch_array($sql)) {
            include "./_actualizaciones/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "_actualizaciones", $_usuarios_grupo)){
                    include "./_actualizaciones/vista/tr.php";
                   // include "./_actualizaciones/vista/tr_editar.php";
                }else{
                    include "./_actualizaciones/vista/tr.php";
                }
            $i++;    
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "_actualizaciones", $_usuarios_grupo)){
             //   include "./_actualizaciones/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 


