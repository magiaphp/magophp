 <?php  
 /**  
 magia_version: 0.0.8 
  * ATENCION !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
  * Posibles errores al confundir 
  * $_usuarios_usuario con $t_usuarios_usuario
 **/ 
 $sql=mysql_query(" UPDATE _usuarios SET  
    
 clave = '". codifica_clave($t_usuarios_clave_nueva)."'  
     
 WHERE usuario = '$_usuarios_usuario' ",$conexion) or die ("Error: ".mysql_error());   
