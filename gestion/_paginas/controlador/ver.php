 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $accion = "ver"; 
 $pagina = "_paginas"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $_paginas_id 		= mysql_real_escape_string($_REQUEST['_paginas_id']);   
     include "./_paginas/modelos/ver.php"; 
     include "./_paginas/reg/reg.php"; 
     include "./_paginas/vista/ver.php"; 
     logs_historico($p, $c, $_paginas_id);
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
