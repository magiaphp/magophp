 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "ver"; 
 $pagina = "_actualizaciones"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $_actualizaciones_id 		= mysql_real_escape_string($_REQUEST['_actualizaciones_id']);   
     include "./_actualizaciones/modelos/ver.php"; 
     include "./_actualizaciones/reg/reg.php"; 
     include "./_actualizaciones/vista/txt.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
