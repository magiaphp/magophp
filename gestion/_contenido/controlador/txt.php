 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $accion = "ver"; 
 $pagina = "_contenido"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $_contenido_id 		= mysql_real_escape_string($_REQUEST['_contenido_id']);   
     include "./_contenido/modelos/ver.php"; 
     include "./_contenido/reg/reg.php"; 
     include "./_contenido/vista/txt.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
