 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $accion = "ver"; 
 $pagina = "_usuarios"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $t_usuarios_id 		= mysql_real_escape_string($_REQUEST['t_usuarios_id']);   
     include "./_usuarios/modelos/ver.php"; 
     include "./_usuarios/reg/ttt.php"; 
     include "./_usuarios/vista/txt.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
