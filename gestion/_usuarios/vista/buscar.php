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
<th><?php _t("Usuario"); ?></th> 
<th><?php _t("Clave"); ?></th> 
<th><?php _t("Estatus"); ?></th> 
 <th><?php _t("Accion"); ?></th> 
 </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "_usuarios", $_usuarios_grupo)){
             //   include "./_usuarios/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        $i = 1;
        while ($t_usuarios = mysql_fetch_array($sql)) {
            include "./_usuarios/reg/ttt.php"; 
                if(permisos_tiene_permiso("editar", "_usuarios", $_usuarios_grupo)){
                    include "./_usuarios/vista/tr.php";
                   // include "./_usuarios/vista/tr_editar.php";
                }else{
                    include "./_usuarios/vista/tr.php";
                }
            $i++;    
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "_usuarios", $_usuarios_grupo)){
             //   include "./_usuarios/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 


