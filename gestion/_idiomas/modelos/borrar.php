 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql=mysql_query(" 
 DELETE FROM  
 _idiomas  
 WHERE id = '$_idiomas_id' 
 ",$conexion) or die ("Error ".mysql_error()); 
  
 $mensaje = "Realizado"; 
