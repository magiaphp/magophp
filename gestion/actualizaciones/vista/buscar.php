<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<?php include "tabs.php"; ?>

<h2> 

<span class="glyphicon glyphicon-search"></span> 

<?php _t("Resultados de su busqueda en "); ?>

</h2>


<table class="table table-striped">
    <thead>
        <tr> 
<th><?php _t("Codigo"); ?></th> 
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
   if(permisos_tiene_permiso("ver", "actualizaciones", $_usuarios_grupo)){
             //   include "./actualizaciones/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        $i = 1;
        while ($actualizaciones = mysql_fetch_array($sql)) {
            include "./actualizaciones/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "actualizaciones", $_usuarios_grupo)){
                    include "./actualizaciones/vista/tr.php";
                   // include "./actualizaciones/vista/tr_editar.php";
                }else{
                    include "./actualizaciones/vista/tr.php";
                }
            $i++;    
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "actualizaciones", $_usuarios_grupo)){
             //   include "./actualizaciones/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 


