 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $accion = "ver"; 
 $pagina = "_traducciones"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $_traducciones_id 		= mysql_real_escape_string($_REQUEST['_traducciones_id']);   
     include "./_traducciones/modelos/ver.php"; 
     include "./_traducciones/reg/reg.php"; 
     include "./_traducciones/vista/ver.php"; 
     logs_historico($p, $c, $_traducciones_id);
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
