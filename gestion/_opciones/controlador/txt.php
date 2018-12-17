 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $accion = "ver"; 
 $pagina = "_opciones"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $_opciones_id 		= mysql_real_escape_string($_REQUEST['_opciones_id']);   
     include "./_opciones/modelos/ver.php"; 
     include "./_opciones/reg/reg.php"; 
     include "./_opciones/vista/txt.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
