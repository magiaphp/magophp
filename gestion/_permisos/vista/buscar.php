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
<th><?php _t("Grupo"); ?></th> 
<th><?php _t("Pagina"); ?></th> 
<th><?php _t("Permiso"); ?></th> 
 <th><?php _t("Accion"); ?></th> 
 </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "_permisos", $_usuarios_grupo)){
             //   include "./_permisos/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        $i = 1;
        while ($_permisos = mysql_fetch_array($sql)) {
            include "./_permisos/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "_permisos", $_usuarios_grupo)){
                    include "./_permisos/vista/tr.php";
                   // include "./_permisos/vista/tr_editar.php";
                }else{
                    include "./_permisos/vista/tr.php";
                }
            $i++;    
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "_permisos", $_usuarios_grupo)){
             //   include "./_permisos/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 


