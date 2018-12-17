 <?php  
 /**  
 magia_version: 0.0.8 
 **/ 
 
 
if (permisos_tiene_permiso("editar", "contactos_ajenos", $_usuarios_grupo)) {
    $comando = "UPDATE contactos SET  idioma = '$contactos_idioma'  WHERE email = '$email'"; 
} else {
    $comando = "UPDATE contactos SET  idioma = '$contactos_idioma'  WHERE email = '$email' AND id = '" . contactos_campo_segun_email('id', $_usuarios_usuario) . "'   ";
}


 $sql=mysql_query($comando,$conexion) or die ("Error: ".mysql_error());   
