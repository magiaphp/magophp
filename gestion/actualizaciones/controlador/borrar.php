 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $accion = "borrar"; 
 $pagina = "actualizaciones"; 
 if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) { 
 $actualizaciones_id 		= mysql_real_escape_string($_REQUEST['actualizaciones_id']); 
 include "./actualizaciones/modelos/borrar.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
