 <?php  
 /**  
 magia_version: 0.0.8 
 **/ 
 
 if (permisos_tiene_permiso("editar", "contactos_ajenos", $_usuarios_grupo)) {
    $comando = "UPDATE _usuarios SET grupo = '$contactos_grupo'  WHERE usuario = '$contactos_email'"; 
} else {
    $comando = "UPDATE _usuarios SET grupo = '$contactos_grupo'  WHERE usuario = '$contactos_email' AND id = '" . contactos_campo_segun_email('id', $_usuarios_usuario) . "'  ";
}




 $sql=mysql_query($comando,$conexion) or die ("Error: ".mysql_error());   
