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
<th><?php _t("Pagina"); ?></th> 
 <th><?php _t("Accion"); ?></th> 
 </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "_paginas", $_usuarios_grupo)){
             //   include "./_paginas/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        $i = 1;
        while ($_paginas = mysql_fetch_array($sql)) {
            include "./_paginas/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "_paginas", $_usuarios_grupo)){
                    include "./_paginas/vista/tr.php";
                   // include "./_paginas/vista/tr_editar.php";
                }else{
                    include "./_paginas/vista/tr.php";
                }
            $i++;    
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "_paginas", $_usuarios_grupo)){
             //   include "./_paginas/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 


