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
<th><?php _t("Ubicacion"); ?></th> 
<th><?php _t("Padre"); ?></th> 
<th><?php _t("Label"); ?></th> 
<th><?php _t("Url"); ?></th> 
<th><?php _t("Icono"); ?></th> 
<th><?php _t("Orden"); ?></th> 
 <th><?php _t("Accion"); ?></th> 
 </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "_menu", $_usuarios_grupo)){
             //   include "./_menu/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        $i = 1;
        while ($_menu = mysql_fetch_array($sql)) {
            include "./_menu/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "_menu", $_usuarios_grupo)){
                    include "./_menu/vista/tr.php";
                   // include "./_menu/vista/tr_editar.php";
                }else{
                    include "./_menu/vista/tr.php";
                }
            $i++;    
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "_menu", $_usuarios_grupo)){
             //   include "./_menu/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 


