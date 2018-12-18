 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "borrar"; 
 $pagina = "_actualizaciones"; 
 if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) { 
 $_actualizaciones_id 		= mysql_real_escape_string($_REQUEST['_actualizaciones_id']); 
 include "./_actualizaciones/modelos/borrar.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
