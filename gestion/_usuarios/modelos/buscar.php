 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $comando = "SELECT *  
 FROM _usuarios  
 WHERE  
 grupo like '%$t_usuarios_grupo%'    
 AND  usuario like '%$t_usuarios_usuario%'    
 AND  clave like '%$t_usuarios_clave%'    
 AND  estatus like '%$t_usuarios_estatus%'    
 ORDER BY id DESC"; 
 $sql=mysql_query( 
         "    
 ",$conexion) or die ("Error:".mysql_error()); 

$total_items = mysql_num_rows(mysql_query("$comando ",$conexion));


