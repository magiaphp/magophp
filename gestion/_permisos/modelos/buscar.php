 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $comando = "SELECT *  
 FROM _permisos  
 WHERE  
 grupo like '%$_permisos_grupo%'    
 AND  pagina like '%$_permisos_pagina%'    
 AND  permiso like '%$_permisos_permiso%'    
 ORDER BY id DESC"; 
 
 $sql=mysql_query( 
         " $comando ",$conexion) or die ("Error:".mysql_error());  
 
  $total_items = mysql_num_rows(mysql_query("$comando ",$conexion));
