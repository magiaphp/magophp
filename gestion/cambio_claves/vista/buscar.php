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
<th><?php _t("Usuario"); ?></th> 
<th><?php _t("Codigo"); ?></th> 
<th><?php _t("Fecha_solicitud"); ?></th> 
<th><?php _t("Codigo_usado"); ?></th> 
 <th><?php _t("Accion"); ?></th> 
 </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "cambio_claves", $_usuarios_grupo)){
             //   include "./cambio_claves/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        $i = 1;
        while ($cambio_claves = mysql_fetch_array($sql)) {
            include "./cambio_claves/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "cambio_claves", $_usuarios_grupo)){
                    include "./cambio_claves/vista/tr.php";
                   // include "./cambio_claves/vista/tr_editar.php";
                }else{
                    include "./cambio_claves/vista/tr.php";
                }
            $i++;    
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "cambio_claves", $_usuarios_grupo)){
             //   include "./cambio_claves/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 


