 <?php  
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql=mysql_query(" UPDATE _permisos SET  permiso = '$_permisos_permiso'  
 WHERE grupo ='$_permisos_grupo' AND pagina = '$_permisos_pagina' ",$conexion) or die ("Error: ".mysql_error());   
