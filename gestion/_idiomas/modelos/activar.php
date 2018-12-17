 <?php  
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql=mysql_query(" UPDATE _idiomas SET  
 activo = '$_idiomas_activo'   
 WHERE idioma = '$_idiomas_idioma' ",$conexion) or die ("Error: ".mysql_error());   
