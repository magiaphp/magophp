 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql=mysql_query(" 
 DELETE FROM  
 _usuarios  
 WHERE id = '$t_usuarios_id' 
 ",$conexion) or die ("Error ".mysql_error()); 
  

