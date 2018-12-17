 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $accion = "ver"; 
 $pagina = "_idiomas"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $_idiomas_id 		= mysql_real_escape_string($_REQUEST['_idiomas_id']);   
     include "./_idiomas/modelos/ver.php"; 
     include "./_idiomas/reg/reg.php"; 
     include "./_idiomas/vista/ver.php"; 
     
     logs_historico($p,$c,$_idiomas_id);
     
     
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
