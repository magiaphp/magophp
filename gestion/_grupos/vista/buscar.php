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
 <th><?php _t("Accion"); ?></th> 
 </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "_grupos", $_usuarios_grupo)){
             //   include "./_grupos/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        $i = 1;
        while ($_grupos = mysql_fetch_array($sql)) {
            include "./_grupos/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "_grupos", $_usuarios_grupo)){
                    include "./_grupos/vista/tr.php";
                   // include "./_grupos/vista/tr_editar.php";
                }else{
                    include "./_grupos/vista/tr.php";
                }
            $i++;    
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "_grupos", $_usuarios_grupo)){
             //   include "./_grupos/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 


