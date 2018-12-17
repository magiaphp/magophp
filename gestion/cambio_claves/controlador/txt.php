 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $accion = "ver"; 
 $pagina = "cambio_claves"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $cambio_claves_id 		= mysql_real_escape_string($_REQUEST['cambio_claves_id']);   
     include "./cambio_claves/modelos/ver.php"; 
     include "./cambio_claves/reg/reg.php"; 
     include "./cambio_claves/vista/txt.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
