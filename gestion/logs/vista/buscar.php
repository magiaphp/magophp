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
<th><?php _t("Fecha"); ?></th> 
<th><?php _t("Usuario"); ?></th> 
<th><?php _t("Grupo"); ?></th> 
<th><?php _t("Ip"); ?></th> 
<th><?php _t("Mac"); ?></th> 
<th><?php _t("P"); ?></th> 
<th><?php _t("C"); ?></th> 
<th><?php _t("A"); ?></th> 
<th><?php _t("Comando"); ?></th> 
<th><?php _t("Argumento"); ?></th> 
<th><?php _t("Sospechoso"); ?></th> 
 <th><?php _t("Accion"); ?></th> 
 </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "logs", $_usuarios_grupo)){
             //   include "./logs/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        $i = 1;
        while ($logs = mysql_fetch_array($sql)) {
            include "./logs/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "logs", $_usuarios_grupo)){
                    include "./logs/vista/tr.php";
                   // include "./logs/vista/tr_editar.php";
                }else{
                    include "./logs/vista/tr.php";
                }
            $i++;    
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "logs", $_usuarios_grupo)){
             //   include "./logs/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 


