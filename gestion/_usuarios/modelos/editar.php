 <?php  
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql=mysql_query(" UPDATE _usuarios SET  
    grupo = '$t_usuarios_grupo'  
 ,  estatus = '$t_usuarios_estatus'  
 WHERE id = '$t_usuarios_id' ",$conexion) or die ("Error: ".mysql_error());   
