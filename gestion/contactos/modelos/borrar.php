 <?php  
 /**  
 magia_version: 0.0.8 
 **/ 
 
 
if (permisos_tiene_permiso("borrar", "contactos_ajenos", $_usuarios_grupo)) {
    $comando = " DELETE FROM contactos WHERE email = '$contactos_email'"; 
} else {
    $comando = " DELETE FROM contactos WHERE email = '$contactos_email' AND id = '" . contactos_campo_segun_email('id', $_usuarios_usuario) . "'   ";
}




 $sql=mysql_query($comando,$conexion) or die ("Error: ".mysql_error());   

